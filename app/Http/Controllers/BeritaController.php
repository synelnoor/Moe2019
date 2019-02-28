<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Repositories\BeritaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy

class BeritaController extends AppBaseController
{
    /** @var  BeritaRepository */
    private $beritaRepository;

    public function __construct(BeritaRepository $beritaRepo)
    {
        $this->middleware('auth');
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * Display a listing of the Berita.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->beritaRepository->pushCriteria(new RequestCriteria($request));
        $beritas = $this->beritaRepository->all();

        return view('beritas.index')
            ->with('beritas', $beritas);
    }

    /**
     * Show the form for creating a new Berita.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        

        // edited by dandisy
        // return view('beritas.create');
        return view('beritas.create');
    }

    /**
     * Store a newly created Berita in storage.
     *
     * @param CreateBeritaRequest $request
     *
     * @return Response
     */
    public function store(CreateBeritaRequest $request)
    {
        $input = $request->all();

        $berita = $this->beritaRepository->create($input);

        Flash::success('Berita saved successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Display the specified Berita.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $berita = $this->beritaRepository->findWithoutFail($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.show')->with('berita', $berita);
    }

    /**
     * Show the form for editing the specified Berita.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $berita = $this->beritaRepository->findWithoutFail($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        // edited by dandisy
        // return view('beritas.edit')->with('berita', $berita);
        return view('beritas.edit')
            ->with('berita', $berita);        
    }

    /**
     * Update the specified Berita in storage.
     *
     * @param  int              $id
     * @param UpdateBeritaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBeritaRequest $request)
    {
        $berita = $this->beritaRepository->findWithoutFail($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        $berita = $this->beritaRepository->update($request->all(), $id);

        Flash::success('Berita updated successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Remove the specified Berita from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $berita = $this->beritaRepository->findWithoutFail($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        $this->beritaRepository->delete($id);

        Flash::success('Berita deleted successfully.');

        return redirect(route('beritas.index'));
    }

    /**
     * Store data Berita from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $berita = $this->beritaRepository->create($item->toArray());
            });
        });

        Flash::success('Berita saved successfully.');

        return redirect(route('beritas.index'));
    }
}

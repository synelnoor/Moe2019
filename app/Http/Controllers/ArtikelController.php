<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;
use App\Repositories\ArtikelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy

class ArtikelController extends AppBaseController
{
    /** @var  ArtikelRepository */
    private $artikelRepository;

    public function __construct(ArtikelRepository $artikelRepo)
    {
        $this->middleware('auth');
        $this->artikelRepository = $artikelRepo;
    }

    /**
     * Display a listing of the Artikel.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->artikelRepository->pushCriteria(new RequestCriteria($request));
        $artikels = $this->artikelRepository->all();

        return view('artikels.index')
            ->with('artikels', $artikels);
    }

    /**
     * Show the form for creating a new Artikel.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        

        // edited by dandisy
        // return view('artikels.create');
        return view('artikels.create');
    }

    /**
     * Store a newly created Artikel in storage.
     *
     * @param CreateArtikelRequest $request
     *
     * @return Response
     */
    public function store(CreateArtikelRequest $request)
    {
        $input = $request->all();
       
        $input['gambar']=$input['file'];
        //dd($input);

        $artikel = $this->artikelRepository->create($input);

        Flash::success('Artikel saved successfully.');

        return redirect(route('artikels.index'));
    }

    /**
     * Display the specified Artikel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $artikel = $this->artikelRepository->findWithoutFail($id);

        if (empty($artikel)) {
            Flash::error('Artikel not found');

            return redirect(route('artikels.index'));
        }

        return view('artikels.show')->with('artikel', $artikel);
    }

    /**
     * Show the form for editing the specified Artikel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $artikel = $this->artikelRepository->findWithoutFail($id);

        if (empty($artikel)) {
            Flash::error('Artikel not found');

            return redirect(route('artikels.index'));
        }

        // edited by dandisy
        // return view('artikels.edit')->with('artikel', $artikel);
        return view('artikels.edit')
            ->with('artikel', $artikel);        
    }

    /**
     * Update the specified Artikel in storage.
     *
     * @param  int              $id
     * @param UpdateArtikelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArtikelRequest $request)
    {
        $artikel = $this->artikelRepository->findWithoutFail($id);

        if (empty($artikel)) {
            Flash::error('Artikel not found');

            return redirect(route('artikels.index'));
        }

        $artikel = $this->artikelRepository->update($request->all(), $id);

        Flash::success('Artikel updated successfully.');

        return redirect(route('artikels.index'));
    }

    /**
     * Remove the specified Artikel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $artikel = $this->artikelRepository->findWithoutFail($id);

        if (empty($artikel)) {
            Flash::error('Artikel not found');

            return redirect(route('artikels.index'));
        }

        $this->artikelRepository->delete($id);

        Flash::success('Artikel deleted successfully.');

        return redirect(route('artikels.index'));
    }

    /**
     * Store data Artikel from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $artikel = $this->artikelRepository->create($item->toArray());
            });
        });

        Flash::success('Artikel saved successfully.');

        return redirect(route('artikels.index'));
    }
}

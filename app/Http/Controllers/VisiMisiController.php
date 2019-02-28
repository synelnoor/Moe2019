<?php

namespace App\Http\Controllers;

use App\DataTables\VisiMisiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateVisiMisiRequest;
use App\Http\Requests\UpdateVisiMisiRequest;
use App\Repositories\VisiMisiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request; // added by dandisy
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy

class VisiMisiController extends AppBaseController
{
    /** @var  VisiMisiRepository */
    private $visiMisiRepository;

    public function __construct(VisiMisiRepository $visiMisiRepo)
    {
        $this->middleware('auth');
        $this->visiMisiRepository = $visiMisiRepo;
    }

    /**
     * Display a listing of the VisiMisi.
     *
     * @param VisiMisiDataTable $visiMisiDataTable
     * @return Response
     */
    public function index(VisiMisiDataTable $visiMisiDataTable)
    {
        return $visiMisiDataTable->render('visi_misis.index');
    }

    /**
     * Show the form for creating a new VisiMisi.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        

        // edited by dandisy
        // return view('visi_misis.create');
        return view('visi_misis.create');
    }

    /**
     * Store a newly created VisiMisi in storage.
     *
     * @param CreateVisiMisiRequest $request
     *
     * @return Response
     */
    public function store(CreateVisiMisiRequest $request)
    {
        $input = $request->all();

        $visiMisi = $this->visiMisiRepository->create($input);

        Flash::success('Visi Misi saved successfully.');

        return redirect(route('visiMisis.index'));
    }

    /**
     * Display the specified VisiMisi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visiMisi = $this->visiMisiRepository->findWithoutFail($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        return view('visi_misis.show')->with('visiMisi', $visiMisi);
    }

    /**
     * Show the form for editing the specified VisiMisi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $visiMisi = $this->visiMisiRepository->findWithoutFail($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        // edited by dandisy
        // return view('visi_misis.edit')->with('visiMisi', $visiMisi);
        return view('visi_misis.edit')
            ->with('visiMisi', $visiMisi);        
    }

    /**
     * Update the specified VisiMisi in storage.
     *
     * @param  int              $id
     * @param UpdateVisiMisiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisiMisiRequest $request)
    {
        $visiMisi = $this->visiMisiRepository->findWithoutFail($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        $visiMisi = $this->visiMisiRepository->update($request->all(), $id);

        Flash::success('Visi Misi updated successfully.');

        return redirect(route('visiMisis.index'));
    }

    /**
     * Remove the specified VisiMisi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visiMisi = $this->visiMisiRepository->findWithoutFail($id);

        if (empty($visiMisi)) {
            Flash::error('Visi Misi not found');

            return redirect(route('visiMisis.index'));
        }

        $this->visiMisiRepository->delete($id);

        Flash::success('Visi Misi deleted successfully.');

        return redirect(route('visiMisis.index'));
    }

    /**
     * Store data VisiMisi from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $visiMisi = $this->visiMisiRepository->create($item->toArray());
            });
        });

        Flash::success('Visi Misi saved successfully.');

        return redirect(route('visiMisis.index'));
    }
}

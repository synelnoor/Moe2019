<?php

namespace App\Http\Controllers;

use App\DataTables\FakultasDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFakultasRequest;
use App\Http\Requests\UpdateFakultasRequest;
use App\Repositories\FakultasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request; // added by dandisy
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy

class FakultasController extends AppBaseController
{
    /** @var  FakultasRepository */
    private $fakultasRepository;

    public function __construct(FakultasRepository $fakultasRepo)
    {
        $this->middleware('auth');
        $this->fakultasRepository = $fakultasRepo;
    }

    /**
     * Display a listing of the Fakultas.
     *
     * @param FakultasDataTable $fakultasDataTable
     * @return Response
     */
    public function index(FakultasDataTable $fakultasDataTable)
    {
        return $fakultasDataTable->render('fakultas.index');
    }

    /**
     * Show the form for creating a new Fakultas.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        

        // edited by dandisy
        // return view('fakultas.create');
        return view('fakultas.create');
    }

    /**
     * Store a newly created Fakultas in storage.
     *
     * @param CreateFakultasRequest $request
     *
     * @return Response
     */
    public function store(CreateFakultasRequest $request)
    {
        $input = $request->all();

        $fakultas = $this->fakultasRepository->create($input);

        Flash::success('Fakultas saved successfully.');

        return redirect(route('fakultas.index'));
    }

    /**
     * Display the specified Fakultas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            Flash::error('Fakultas not found');

            return redirect(route('fakultas.index'));
        }

        return view('fakultas.show')->with('fakultas', $fakultas);
    }

    /**
     * Show the form for editing the specified Fakultas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            Flash::error('Fakultas not found');

            return redirect(route('fakultas.index'));
        }

        // edited by dandisy
        // return view('fakultas.edit')->with('fakultas', $fakultas);
        return view('fakultas.edit')
            ->with('fakultas', $fakultas);        
    }

    /**
     * Update the specified Fakultas in storage.
     *
     * @param  int              $id
     * @param UpdateFakultasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFakultasRequest $request)
    {
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            Flash::error('Fakultas not found');

            return redirect(route('fakultas.index'));
        }

        $fakultas = $this->fakultasRepository->update($request->all(), $id);

        Flash::success('Fakultas updated successfully.');

        return redirect(route('fakultas.index'));
    }

    /**
     * Remove the specified Fakultas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            Flash::error('Fakultas not found');

            return redirect(route('fakultas.index'));
        }

        $this->fakultasRepository->delete($id);

        Flash::success('Fakultas deleted successfully.');

        return redirect(route('fakultas.index'));
    }

    /**
     * Store data Fakultas from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $fakultas = $this->fakultasRepository->create($item->toArray());
            });
        });

        Flash::success('Fakultas saved successfully.');

        return redirect(route('fakultas.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\DosenDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDosenRequest;
use App\Http\Requests\UpdateDosenRequest;
use App\Repositories\DosenRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request; // added by dandisy
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy


use App\Models\Fakultas;


class DosenController extends AppBaseController
{
    /** @var  DosenRepository */
    private $dosenRepository;

    public function __construct(DosenRepository $dosenRepo)
    {
        $this->middleware('auth');
        $this->dosenRepository = $dosenRepo;
    }

    /**
     * Display a listing of the Dosen.
     *
     * @param DosenDataTable $dosenDataTable
     * @return Response
     */
    public function index(DosenDataTable $dosenDataTable)
    {
        return $dosenDataTable->render('dosens.index');
    }

    /**
     * Show the form for creating a new Dosen.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        

        // edited by dandisy
        // return view('dosens.create');

        $fakultas= Fakultas::all();
        return view('dosens.create')
        ->with('fakultas',$fakultas);
    }

    /**
     * Store a newly created Dosen in storage.
     *
     * @param CreateDosenRequest $request
     *
     * @return Response
     */
    public function store(CreateDosenRequest $request)
    {
        $input = $request->all();

        $dosen = $this->dosenRepository->create($input);

        Flash::success('Dosen saved successfully.');

        return redirect(route('dosens.index'));
    }

    /**
     * Display the specified Dosen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dosen = $this->dosenRepository->findWithoutFail($id);

        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }

        return view('dosens.show')->with('dosen', $dosen);
    }

    /**
     * Show the form for editing the specified Dosen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $dosen = $this->dosenRepository->findWithoutFail($id);

        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }

        // edited by dandisy
        // return view('dosens.edit')->with('dosen', $dosen);
        $fakultas= Fakultas::all();
        return view('dosens.edit')
            ->with('dosen', $dosen)
             ->with('fakultas',$fakultas);        
    }

    /**
     * Update the specified Dosen in storage.
     *
     * @param  int              $id
     * @param UpdateDosenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDosenRequest $request)
    {
        $dosen = $this->dosenRepository->findWithoutFail($id);

        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }

        $dosen = $this->dosenRepository->update($request->all(), $id);

        Flash::success('Dosen updated successfully.');

        return redirect(route('dosens.index'));
    }

    /**
     * Remove the specified Dosen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dosen = $this->dosenRepository->findWithoutFail($id);

        if (empty($dosen)) {
            Flash::error('Dosen not found');

            return redirect(route('dosens.index'));
        }

        $this->dosenRepository->delete($id);

        Flash::success('Dosen deleted successfully.');

        return redirect(route('dosens.index'));
    }

    /**
     * Store data Dosen from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $dosen = $this->dosenRepository->create($item->toArray());
            });
        });

        Flash::success('Dosen saved successfully.');

        return redirect(route('dosens.index'));
    }
}

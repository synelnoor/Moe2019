<?php

namespace App\Http\Controllers;

use App\DataTables\JurnalDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateJurnalRequest;
use App\Http\Requests\UpdateJurnalRequest;
use App\Repositories\JurnalRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request; // added by dandisy
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy
use App\Models\Dosen;

class JurnalController extends AppBaseController
{
    /** @var  JurnalRepository */
    private $jurnalRepository;

    public function __construct(JurnalRepository $jurnalRepo)
    {
        $this->middleware('auth');
        $this->jurnalRepository = $jurnalRepo;
    }

    /**
     * Display a listing of the Jurnal.
     *
     * @param JurnalDataTable $jurnalDataTable
     * @return Response
     */
    public function index(JurnalDataTable $jurnalDataTable)
    {
        return $jurnalDataTable->render('jurnals.index');
    }

    /**
     * Show the form for creating a new Jurnal.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        
         $dosen= Dosen::all();
        // edited by dandisy
        // return view('jurnals.create');
        return view('jurnals.create')
         ->with('dosen',$dosen);
    }

    /**
     * Store a newly created Jurnal in storage.
     *
     * @param CreateJurnalRequest $request
     *
     * @return Response
     */
    public function store(CreateJurnalRequest $request)
    {
        $input = $request->all();
        // dd($input);

        $jurnal = $this->jurnalRepository->create($input);

        Flash::success('Jurnal saved successfully.');

        return redirect(route('jurnals.index'));
    }

    /**
     * Display the specified Jurnal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jurnal = $this->jurnalRepository->findWithoutFail($id);

        if (empty($jurnal)) {
            Flash::error('Jurnal not found');

            return redirect(route('jurnals.index'));
        }

        return view('jurnals.show')->with('jurnal', $jurnal);
    }

    /**
     * Show the form for editing the specified Jurnal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $jurnal = $this->jurnalRepository->findWithoutFail($id);

        if (empty($jurnal)) {
            Flash::error('Jurnal not found');

            return redirect(route('jurnals.index'));
        }

         $dosen= Dosen::all();

        // edited by dandisy
        // return view('jurnals.edit')->with('jurnal', $jurnal);
        return view('jurnals.edit')
            ->with('jurnal', $jurnal)
             ->with('dosen',$dosen);        
    }

    /**
     * Update the specified Jurnal in storage.
     *
     * @param  int              $id
     * @param UpdateJurnalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJurnalRequest $request)
    {
        $jurnal = $this->jurnalRepository->findWithoutFail($id);

        if (empty($jurnal)) {
            Flash::error('Jurnal not found');

            return redirect(route('jurnals.index'));
        }

        $jurnal = $this->jurnalRepository->update($request->all(), $id);

        Flash::success('Jurnal updated successfully.');

        return redirect(route('jurnals.index'));
    }

    /**
     * Remove the specified Jurnal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jurnal = $this->jurnalRepository->findWithoutFail($id);

        if (empty($jurnal)) {
            Flash::error('Jurnal not found');

            return redirect(route('jurnals.index'));
        }

        $this->jurnalRepository->delete($id);

        Flash::success('Jurnal deleted successfully.');

        return redirect(route('jurnals.index'));
    }

    /**
     * Store data Jurnal from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $jurnal = $this->jurnalRepository->create($item->toArray());
            });
        });

        Flash::success('Jurnal saved successfully.');

        return redirect(route('jurnals.index'));
    }
}

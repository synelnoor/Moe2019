<?php

namespace App\Http\Controllers;

use App\DataTables\KalenderDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateKalenderRequest;
use App\Http\Requests\UpdateKalenderRequest;
use App\Repositories\KalenderRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request; // added by dandisy
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy

class KalenderController extends AppBaseController
{
    /** @var  KalenderRepository */
    private $kalenderRepository;

    public function __construct(KalenderRepository $kalenderRepo)
    {
        $this->middleware('auth');
        $this->kalenderRepository = $kalenderRepo;
    }

    /**
     * Display a listing of the Kalender.
     *
     * @param KalenderDataTable $kalenderDataTable
     * @return Response
     */
    public function index(KalenderDataTable $kalenderDataTable)
    {
        return $kalenderDataTable->render('kalenders.index');
    }

    /**
     * Show the form for creating a new Kalender.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        

        // edited by dandisy
        // return view('kalenders.create');
        return view('kalenders.create');
    }

    /**
     * Store a newly created Kalender in storage.
     *
     * @param CreateKalenderRequest $request
     *
     * @return Response
     */
    public function store(CreateKalenderRequest $request)
    {
        $input = $request->all();

        $kalender = $this->kalenderRepository->create($input);

        Flash::success('Kalender saved successfully.');

        return redirect(route('kalenders.index'));
    }

    /**
     * Display the specified Kalender.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kalender = $this->kalenderRepository->findWithoutFail($id);

        if (empty($kalender)) {
            Flash::error('Kalender not found');

            return redirect(route('kalenders.index'));
        }

        return view('kalenders.show')->with('kalender', $kalender);
    }

    /**
     * Show the form for editing the specified Kalender.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $kalender = $this->kalenderRepository->findWithoutFail($id);

        if (empty($kalender)) {
            Flash::error('Kalender not found');

            return redirect(route('kalenders.index'));
        }

        // edited by dandisy
        // return view('kalenders.edit')->with('kalender', $kalender);
        return view('kalenders.edit')
            ->with('kalender', $kalender);        
    }

    /**
     * Update the specified Kalender in storage.
     *
     * @param  int              $id
     * @param UpdateKalenderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKalenderRequest $request)
    {
        $kalender = $this->kalenderRepository->findWithoutFail($id);

        if (empty($kalender)) {
            Flash::error('Kalender not found');

            return redirect(route('kalenders.index'));
        }

        $kalender = $this->kalenderRepository->update($request->all(), $id);

        Flash::success('Kalender updated successfully.');

        return redirect(route('kalenders.index'));
    }

    /**
     * Remove the specified Kalender from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kalender = $this->kalenderRepository->findWithoutFail($id);

        if (empty($kalender)) {
            Flash::error('Kalender not found');

            return redirect(route('kalenders.index'));
        }

        $this->kalenderRepository->delete($id);

        Flash::success('Kalender deleted successfully.');

        return redirect(route('kalenders.index'));
    }

    /**
     * Store data Kalender from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $kalender = $this->kalenderRepository->create($item->toArray());
            });
        });

        Flash::success('Kalender saved successfully.');

        return redirect(route('kalenders.index'));
    }
}

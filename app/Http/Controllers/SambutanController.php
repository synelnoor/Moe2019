<?php

namespace App\Http\Controllers;

use App\DataTables\SambutanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSambutanRequest;
use App\Http\Requests\UpdateSambutanRequest;
use App\Repositories\SambutanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request; // added by dandisy
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy

use App\Models\Dosen;

class SambutanController extends AppBaseController
{
    /** @var  SambutanRepository */
    private $sambutanRepository;

    public function __construct(SambutanRepository $sambutanRepo)
    {
        $this->middleware('auth');
        $this->sambutanRepository = $sambutanRepo;
    }

    /**
     * Display a listing of the Sambutan.
     *
     * @param SambutanDataTable $sambutanDataTable
     * @return Response
     */
    public function index(SambutanDataTable $sambutanDataTable)
    {
        return $sambutanDataTable->render('sambutans.index');
    }

    /**
     * Show the form for creating a new Sambutan.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        

        // edited by dandisy
        // return view('sambutans.create');
        $dosen = Dosen::all();
        // dd($dosen);

        return view('sambutans.create')->with('dosen',$dosen);
    }

    /**
     * Store a newly created Sambutan in storage.
     *
     * @param CreateSambutanRequest $request
     *
     * @return Response
     */
    public function store(CreateSambutanRequest $request)
    {
        $input = $request->all();

        $sambutan = $this->sambutanRepository->create($input);

        Flash::success('Sambutan saved successfully.');

        return redirect(route('sambutans.index'));
    }

    /**
     * Display the specified Sambutan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sambutan = $this->sambutanRepository->findWithoutFail($id);

        if (empty($sambutan)) {
            Flash::error('Sambutan not found');

            return redirect(route('sambutans.index'));
        }

        return view('sambutans.show')->with('sambutan', $sambutan);
    }

    /**
     * Show the form for editing the specified Sambutan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $sambutan = $this->sambutanRepository->findWithoutFail($id);

        if (empty($sambutan)) {
            Flash::error('Sambutan not found');

            return redirect(route('sambutans.index'));
        }
        $dosen = Dosen::all();

        // edited by dandisy
        // return view('sambutans.edit')->with('sambutan', $sambutan);
        return view('sambutans.edit')
            ->with('sambutan', $sambutan)
            ->with('dosen',$dosen);        
    }

    /**
     * Update the specified Sambutan in storage.
     *
     * @param  int              $id
     * @param UpdateSambutanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSambutanRequest $request)
    {
        $sambutan = $this->sambutanRepository->findWithoutFail($id);

        if (empty($sambutan)) {
            Flash::error('Sambutan not found');

            return redirect(route('sambutans.index'));
        }

        $sambutan = $this->sambutanRepository->update($request->all(), $id);

        Flash::success('Sambutan updated successfully.');

        return redirect(route('sambutans.index'));
    }

    /**
     * Remove the specified Sambutan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sambutan = $this->sambutanRepository->findWithoutFail($id);

        if (empty($sambutan)) {
            Flash::error('Sambutan not found');

            return redirect(route('sambutans.index'));
        }

        $this->sambutanRepository->delete($id);

        Flash::success('Sambutan deleted successfully.');

        return redirect(route('sambutans.index'));
    }

    /**
     * Store data Sambutan from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $sambutan = $this->sambutanRepository->create($item->toArray());
            });
        });

        Flash::success('Sambutan saved successfully.');

        return redirect(route('sambutans.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\DataTables\BukuDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Repositories\BukuRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request; // added by dandisy
use Illuminate\Support\Facades\Auth; // added by dandisy
use Illuminate\Support\Facades\Storage; // added by dandisy
use Maatwebsite\Excel\Facades\Excel; // added by dandisy
use App\Models\Dosen;

class BukuController extends AppBaseController
{
    /** @var  BukuRepository */
    private $bukuRepository;

    public function __construct(BukuRepository $bukuRepo)
    {
        $this->middleware('auth');
        $this->bukuRepository = $bukuRepo;
    }

    /**
     * Display a listing of the Buku.
     *
     * @param BukuDataTable $bukuDataTable
     * @return Response
     */
    public function index(BukuDataTable $bukuDataTable)
    {
        return $bukuDataTable->render('bukus.index');
    }

    /**
     * Show the form for creating a new Buku.
     *
     * @return Response
     */
    public function create()
    {
        // added by dandisy
        $dosen= Dosen::all();

        // edited by dandisy
        // return view('bukus.create');
        return view('bukus.create')
        ->with('dosen',$dosen);
    }

    /**
     * Store a newly created Buku in storage.
     *
     * @param CreateBukuRequest $request
     *
     * @return Response
     */
    public function store(CreateBukuRequest $request)
    {
        $input = $request->all();

        $buku = $this->bukuRepository->create($input);

        Flash::success('Buku saved successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Display the specified Buku.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        return view('bukus.show')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified Buku.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // added by dandisy
        

        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }
            $dosen= Dosen::all();
        // edited by dandisy
        // return view('bukus.edit')->with('buku', $buku);
        return view('bukus.edit')
            ->with('buku', $buku)
            ->with('dosen',$dosen);        
    }

    /**
     * Update the specified Buku in storage.
     *
     * @param  int              $id
     * @param UpdateBukuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBukuRequest $request)
    {
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        $buku = $this->bukuRepository->update($request->all(), $id);

        Flash::success('Buku updated successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Remove the specified Buku from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        $this->bukuRepository->delete($id);

        Flash::success('Buku deleted successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Store data Buku from an excel file in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function import(Request $request)
    {
        Excel::load($request->file('file'), function($reader) {
            $reader->each(function ($item) {
                $buku = $this->bukuRepository->create($item->toArray());
            });
        });

        Flash::success('Buku saved successfully.');

        return redirect(route('bukus.index'));
    }
}

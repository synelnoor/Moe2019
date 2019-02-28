<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateArtikelAPIRequest;
use App\Http\Requests\API\UpdateArtikelAPIRequest;
use App\Models\Artikel;
use App\Repositories\ArtikelRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ArtikelController
 * @package App\Http\Controllers\API
 */

class ArtikelAPIController extends AppBaseController
{
    /** @var  ArtikelRepository */
    private $artikelRepository;

    public function __construct(ArtikelRepository $artikelRepo)
    {
        $this->middleware('auth:api');
        $this->artikelRepository = $artikelRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/artikels",
     *      summary="Get a listing of the Artikels.",
     *      tags={"Artikel"},
     *      description="Get all Artikels",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Artikel")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->artikelRepository->pushCriteria(new RequestCriteria($request));
        $this->artikelRepository->pushCriteria(new LimitOffsetCriteria($request));
        $artikels = $this->artikelRepository->all();

        return $this->sendResponse($artikels->toArray(), 'Artikels retrieved successfully');
    }

    /**
     * @param CreateArtikelAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/artikels",
     *      summary="Store a newly created Artikel in storage",
     *      tags={"Artikel"},
     *      description="Store Artikel",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Artikel that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Artikel")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Artikel"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateArtikelAPIRequest $request)
    {
        $input = $request->all();

        $artikels = $this->artikelRepository->create($input);

        return $this->sendResponse($artikels->toArray(), 'Artikel saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/artikels/{id}",
     *      summary="Display the specified Artikel",
     *      tags={"Artikel"},
     *      description="Get Artikel",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Artikel",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Artikel"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Artikel $artikel */
        $artikel = $this->artikelRepository->findWithoutFail($id);

        if (empty($artikel)) {
            return $this->sendError('Artikel not found');
        }

        return $this->sendResponse($artikel->toArray(), 'Artikel retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateArtikelAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/artikels/{id}",
     *      summary="Update the specified Artikel in storage",
     *      tags={"Artikel"},
     *      description="Update Artikel",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Artikel",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Artikel that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Artikel")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Artikel"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateArtikelAPIRequest $request)
    {
        $input = $request->all();

        /** @var Artikel $artikel */
        $artikel = $this->artikelRepository->findWithoutFail($id);

        if (empty($artikel)) {
            return $this->sendError('Artikel not found');
        }

        $artikel = $this->artikelRepository->update($input, $id);

        return $this->sendResponse($artikel->toArray(), 'Artikel updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/artikels/{id}",
     *      summary="Remove the specified Artikel from storage",
     *      tags={"Artikel"},
     *      description="Delete Artikel",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Artikel",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Artikel $artikel */
        $artikel = $this->artikelRepository->findWithoutFail($id);

        if (empty($artikel)) {
            return $this->sendError('Artikel not found');
        }

        $artikel->delete();

        return $this->sendResponse($id, 'Artikel deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBeritaAPIRequest;
use App\Http\Requests\API\UpdateBeritaAPIRequest;
use App\Models\Berita;
use App\Repositories\BeritaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class BeritaController
 * @package App\Http\Controllers\API
 */

class BeritaAPIController extends AppBaseController
{
    /** @var  BeritaRepository */
    private $beritaRepository;

    public function __construct(BeritaRepository $beritaRepo)
    {
        $this->middleware('auth:api');
        $this->beritaRepository = $beritaRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/beritas",
     *      summary="Get a listing of the Beritas.",
     *      tags={"Berita"},
     *      description="Get all Beritas",
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
     *                  @SWG\Items(ref="#/definitions/Berita")
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
        $this->beritaRepository->pushCriteria(new RequestCriteria($request));
        $this->beritaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $beritas = $this->beritaRepository->all();

        return $this->sendResponse($beritas->toArray(), 'Beritas retrieved successfully');
    }

    /**
     * @param CreateBeritaAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/beritas",
     *      summary="Store a newly created Berita in storage",
     *      tags={"Berita"},
     *      description="Store Berita",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Berita that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Berita")
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
     *                  ref="#/definitions/Berita"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateBeritaAPIRequest $request)
    {
        $input = $request->all();

        $beritas = $this->beritaRepository->create($input);

        return $this->sendResponse($beritas->toArray(), 'Berita saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/beritas/{id}",
     *      summary="Display the specified Berita",
     *      tags={"Berita"},
     *      description="Get Berita",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Berita",
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
     *                  ref="#/definitions/Berita"
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
        /** @var Berita $berita */
        $berita = $this->beritaRepository->findWithoutFail($id);

        if (empty($berita)) {
            return $this->sendError('Berita not found');
        }

        return $this->sendResponse($berita->toArray(), 'Berita retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateBeritaAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/beritas/{id}",
     *      summary="Update the specified Berita in storage",
     *      tags={"Berita"},
     *      description="Update Berita",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Berita",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Berita that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Berita")
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
     *                  ref="#/definitions/Berita"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateBeritaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Berita $berita */
        $berita = $this->beritaRepository->findWithoutFail($id);

        if (empty($berita)) {
            return $this->sendError('Berita not found');
        }

        $berita = $this->beritaRepository->update($input, $id);

        return $this->sendResponse($berita->toArray(), 'Berita updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/beritas/{id}",
     *      summary="Remove the specified Berita from storage",
     *      tags={"Berita"},
     *      description="Delete Berita",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Berita",
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
        /** @var Berita $berita */
        $berita = $this->beritaRepository->findWithoutFail($id);

        if (empty($berita)) {
            return $this->sendError('Berita not found');
        }

        $berita->delete();

        return $this->sendResponse($id, 'Berita deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFakultasAPIRequest;
use App\Http\Requests\API\UpdateFakultasAPIRequest;
use App\Models\Fakultas;
use App\Repositories\FakultasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class FakultasController
 * @package App\Http\Controllers\API
 */

class FakultasAPIController extends AppBaseController
{
    /** @var  FakultasRepository */
    private $fakultasRepository;

    public function __construct(FakultasRepository $fakultasRepo)
    {
        $this->middleware('auth:api');
        $this->fakultasRepository = $fakultasRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/fakultas",
     *      summary="Get a listing of the Fakultas.",
     *      tags={"Fakultas"},
     *      description="Get all Fakultas",
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
     *                  @SWG\Items(ref="#/definitions/Fakultas")
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
        $this->fakultasRepository->pushCriteria(new RequestCriteria($request));
        $this->fakultasRepository->pushCriteria(new LimitOffsetCriteria($request));
        $fakultas = $this->fakultasRepository->all();

        return $this->sendResponse($fakultas->toArray(), 'Fakultas retrieved successfully');
    }

    /**
     * @param CreateFakultasAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/fakultas",
     *      summary="Store a newly created Fakultas in storage",
     *      tags={"Fakultas"},
     *      description="Store Fakultas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Fakultas that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Fakultas")
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
     *                  ref="#/definitions/Fakultas"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateFakultasAPIRequest $request)
    {
        $input = $request->all();

        $fakultas = $this->fakultasRepository->create($input);

        return $this->sendResponse($fakultas->toArray(), 'Fakultas saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/fakultas/{id}",
     *      summary="Display the specified Fakultas",
     *      tags={"Fakultas"},
     *      description="Get Fakultas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Fakultas",
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
     *                  ref="#/definitions/Fakultas"
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
        /** @var Fakultas $fakultas */
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            return $this->sendError('Fakultas not found');
        }

        return $this->sendResponse($fakultas->toArray(), 'Fakultas retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateFakultasAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/fakultas/{id}",
     *      summary="Update the specified Fakultas in storage",
     *      tags={"Fakultas"},
     *      description="Update Fakultas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Fakultas",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Fakultas that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Fakultas")
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
     *                  ref="#/definitions/Fakultas"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateFakultasAPIRequest $request)
    {
        $input = $request->all();

        /** @var Fakultas $fakultas */
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            return $this->sendError('Fakultas not found');
        }

        $fakultas = $this->fakultasRepository->update($input, $id);

        return $this->sendResponse($fakultas->toArray(), 'Fakultas updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/fakultas/{id}",
     *      summary="Remove the specified Fakultas from storage",
     *      tags={"Fakultas"},
     *      description="Delete Fakultas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Fakultas",
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
        /** @var Fakultas $fakultas */
        $fakultas = $this->fakultasRepository->findWithoutFail($id);

        if (empty($fakultas)) {
            return $this->sendError('Fakultas not found');
        }

        $fakultas->delete();

        return $this->sendResponse($id, 'Fakultas deleted successfully');
    }
}

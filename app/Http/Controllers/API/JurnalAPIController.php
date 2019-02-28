<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateJurnalAPIRequest;
use App\Http\Requests\API\UpdateJurnalAPIRequest;
use App\Models\Jurnal;
use App\Repositories\JurnalRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class JurnalController
 * @package App\Http\Controllers\API
 */

class JurnalAPIController extends AppBaseController
{
    /** @var  JurnalRepository */
    private $jurnalRepository;

    public function __construct(JurnalRepository $jurnalRepo)
    {
        $this->middleware('auth:api');
        $this->jurnalRepository = $jurnalRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/jurnals",
     *      summary="Get a listing of the Jurnals.",
     *      tags={"Jurnal"},
     *      description="Get all Jurnals",
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
     *                  @SWG\Items(ref="#/definitions/Jurnal")
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
        $this->jurnalRepository->pushCriteria(new RequestCriteria($request));
        $this->jurnalRepository->pushCriteria(new LimitOffsetCriteria($request));
        $jurnals = $this->jurnalRepository->all();

        return $this->sendResponse($jurnals->toArray(), 'Jurnals retrieved successfully');
    }

    /**
     * @param CreateJurnalAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/jurnals",
     *      summary="Store a newly created Jurnal in storage",
     *      tags={"Jurnal"},
     *      description="Store Jurnal",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Jurnal that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Jurnal")
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
     *                  ref="#/definitions/Jurnal"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateJurnalAPIRequest $request)
    {
        $input = $request->all();

        $jurnals = $this->jurnalRepository->create($input);

        return $this->sendResponse($jurnals->toArray(), 'Jurnal saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/jurnals/{id}",
     *      summary="Display the specified Jurnal",
     *      tags={"Jurnal"},
     *      description="Get Jurnal",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Jurnal",
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
     *                  ref="#/definitions/Jurnal"
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
        /** @var Jurnal $jurnal */
        $jurnal = $this->jurnalRepository->findWithoutFail($id);

        if (empty($jurnal)) {
            return $this->sendError('Jurnal not found');
        }

        return $this->sendResponse($jurnal->toArray(), 'Jurnal retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateJurnalAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/jurnals/{id}",
     *      summary="Update the specified Jurnal in storage",
     *      tags={"Jurnal"},
     *      description="Update Jurnal",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Jurnal",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Jurnal that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Jurnal")
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
     *                  ref="#/definitions/Jurnal"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateJurnalAPIRequest $request)
    {
        $input = $request->all();

        /** @var Jurnal $jurnal */
        $jurnal = $this->jurnalRepository->findWithoutFail($id);

        if (empty($jurnal)) {
            return $this->sendError('Jurnal not found');
        }

        $jurnal = $this->jurnalRepository->update($input, $id);

        return $this->sendResponse($jurnal->toArray(), 'Jurnal updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/jurnals/{id}",
     *      summary="Remove the specified Jurnal from storage",
     *      tags={"Jurnal"},
     *      description="Delete Jurnal",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Jurnal",
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
        /** @var Jurnal $jurnal */
        $jurnal = $this->jurnalRepository->findWithoutFail($id);

        if (empty($jurnal)) {
            return $this->sendError('Jurnal not found');
        }

        $jurnal->delete();

        return $this->sendResponse($id, 'Jurnal deleted successfully');
    }
}

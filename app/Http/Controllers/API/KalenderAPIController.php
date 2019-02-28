<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateKalenderAPIRequest;
use App\Http\Requests\API\UpdateKalenderAPIRequest;
use App\Models\Kalender;
use App\Repositories\KalenderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class KalenderController
 * @package App\Http\Controllers\API
 */

class KalenderAPIController extends AppBaseController
{
    /** @var  KalenderRepository */
    private $kalenderRepository;

    public function __construct(KalenderRepository $kalenderRepo)
    {
        $this->middleware('auth:api');
        $this->kalenderRepository = $kalenderRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/kalenders",
     *      summary="Get a listing of the Kalenders.",
     *      tags={"Kalender"},
     *      description="Get all Kalenders",
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
     *                  @SWG\Items(ref="#/definitions/Kalender")
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
        $this->kalenderRepository->pushCriteria(new RequestCriteria($request));
        $this->kalenderRepository->pushCriteria(new LimitOffsetCriteria($request));
        $kalenders = $this->kalenderRepository->all();

        return $this->sendResponse($kalenders->toArray(), 'Kalenders retrieved successfully');
    }

    /**
     * @param CreateKalenderAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/kalenders",
     *      summary="Store a newly created Kalender in storage",
     *      tags={"Kalender"},
     *      description="Store Kalender",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Kalender that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Kalender")
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
     *                  ref="#/definitions/Kalender"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateKalenderAPIRequest $request)
    {
        $input = $request->all();

        $kalenders = $this->kalenderRepository->create($input);

        return $this->sendResponse($kalenders->toArray(), 'Kalender saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/kalenders/{id}",
     *      summary="Display the specified Kalender",
     *      tags={"Kalender"},
     *      description="Get Kalender",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Kalender",
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
     *                  ref="#/definitions/Kalender"
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
        /** @var Kalender $kalender */
        $kalender = $this->kalenderRepository->findWithoutFail($id);

        if (empty($kalender)) {
            return $this->sendError('Kalender not found');
        }

        return $this->sendResponse($kalender->toArray(), 'Kalender retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateKalenderAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/kalenders/{id}",
     *      summary="Update the specified Kalender in storage",
     *      tags={"Kalender"},
     *      description="Update Kalender",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Kalender",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Kalender that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Kalender")
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
     *                  ref="#/definitions/Kalender"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateKalenderAPIRequest $request)
    {
        $input = $request->all();

        /** @var Kalender $kalender */
        $kalender = $this->kalenderRepository->findWithoutFail($id);

        if (empty($kalender)) {
            return $this->sendError('Kalender not found');
        }

        $kalender = $this->kalenderRepository->update($input, $id);

        return $this->sendResponse($kalender->toArray(), 'Kalender updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/kalenders/{id}",
     *      summary="Remove the specified Kalender from storage",
     *      tags={"Kalender"},
     *      description="Delete Kalender",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Kalender",
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
        /** @var Kalender $kalender */
        $kalender = $this->kalenderRepository->findWithoutFail($id);

        if (empty($kalender)) {
            return $this->sendError('Kalender not found');
        }

        $kalender->delete();

        return $this->sendResponse($id, 'Kalender deleted successfully');
    }
}

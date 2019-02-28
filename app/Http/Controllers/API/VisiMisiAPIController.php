<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateVisiMisiAPIRequest;
use App\Http\Requests\API\UpdateVisiMisiAPIRequest;
use App\Models\VisiMisi;
use App\Repositories\VisiMisiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class VisiMisiController
 * @package App\Http\Controllers\API
 */

class VisiMisiAPIController extends AppBaseController
{
    /** @var  VisiMisiRepository */
    private $visiMisiRepository;

    public function __construct(VisiMisiRepository $visiMisiRepo)
    {
        $this->middleware('auth:api');
        $this->visiMisiRepository = $visiMisiRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/visiMisis",
     *      summary="Get a listing of the VisiMisis.",
     *      tags={"VisiMisi"},
     *      description="Get all VisiMisis",
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
     *                  @SWG\Items(ref="#/definitions/VisiMisi")
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
        $this->visiMisiRepository->pushCriteria(new RequestCriteria($request));
        $this->visiMisiRepository->pushCriteria(new LimitOffsetCriteria($request));
        $visiMisis = $this->visiMisiRepository->all();

        return $this->sendResponse($visiMisis->toArray(), 'Visi Misis retrieved successfully');
    }

    /**
     * @param CreateVisiMisiAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/visiMisis",
     *      summary="Store a newly created VisiMisi in storage",
     *      tags={"VisiMisi"},
     *      description="Store VisiMisi",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="VisiMisi that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/VisiMisi")
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
     *                  ref="#/definitions/VisiMisi"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateVisiMisiAPIRequest $request)
    {
        $input = $request->all();

        $visiMisis = $this->visiMisiRepository->create($input);

        return $this->sendResponse($visiMisis->toArray(), 'Visi Misi saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/visiMisis/{id}",
     *      summary="Display the specified VisiMisi",
     *      tags={"VisiMisi"},
     *      description="Get VisiMisi",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of VisiMisi",
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
     *                  ref="#/definitions/VisiMisi"
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
        /** @var VisiMisi $visiMisi */
        $visiMisi = $this->visiMisiRepository->findWithoutFail($id);

        if (empty($visiMisi)) {
            return $this->sendError('Visi Misi not found');
        }

        return $this->sendResponse($visiMisi->toArray(), 'Visi Misi retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateVisiMisiAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/visiMisis/{id}",
     *      summary="Update the specified VisiMisi in storage",
     *      tags={"VisiMisi"},
     *      description="Update VisiMisi",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of VisiMisi",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="VisiMisi that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/VisiMisi")
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
     *                  ref="#/definitions/VisiMisi"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateVisiMisiAPIRequest $request)
    {
        $input = $request->all();

        /** @var VisiMisi $visiMisi */
        $visiMisi = $this->visiMisiRepository->findWithoutFail($id);

        if (empty($visiMisi)) {
            return $this->sendError('Visi Misi not found');
        }

        $visiMisi = $this->visiMisiRepository->update($input, $id);

        return $this->sendResponse($visiMisi->toArray(), 'VisiMisi updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/visiMisis/{id}",
     *      summary="Remove the specified VisiMisi from storage",
     *      tags={"VisiMisi"},
     *      description="Delete VisiMisi",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of VisiMisi",
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
        /** @var VisiMisi $visiMisi */
        $visiMisi = $this->visiMisiRepository->findWithoutFail($id);

        if (empty($visiMisi)) {
            return $this->sendError('Visi Misi not found');
        }

        $visiMisi->delete();

        return $this->sendResponse($id, 'Visi Misi deleted successfully');
    }
}

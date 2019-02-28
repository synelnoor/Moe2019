<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDosenAPIRequest;
use App\Http\Requests\API\UpdateDosenAPIRequest;
use App\Models\Dosen;
use App\Repositories\DosenRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DosenController
 * @package App\Http\Controllers\API
 */

class DosenAPIController extends AppBaseController
{
    /** @var  DosenRepository */
    private $dosenRepository;

    public function __construct(DosenRepository $dosenRepo)
    {
        $this->middleware('auth:api');
        $this->dosenRepository = $dosenRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/dosens",
     *      summary="Get a listing of the Dosens.",
     *      tags={"Dosen"},
     *      description="Get all Dosens",
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
     *                  @SWG\Items(ref="#/definitions/Dosen")
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
        $this->dosenRepository->pushCriteria(new RequestCriteria($request));
        $this->dosenRepository->pushCriteria(new LimitOffsetCriteria($request));
        $dosens = $this->dosenRepository->all();

        return $this->sendResponse($dosens->toArray(), 'Dosens retrieved successfully');
    }

    /**
     * @param CreateDosenAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/dosens",
     *      summary="Store a newly created Dosen in storage",
     *      tags={"Dosen"},
     *      description="Store Dosen",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Dosen that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Dosen")
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
     *                  ref="#/definitions/Dosen"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateDosenAPIRequest $request)
    {
        $input = $request->all();

        $dosens = $this->dosenRepository->create($input);

        return $this->sendResponse($dosens->toArray(), 'Dosen saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/dosens/{id}",
     *      summary="Display the specified Dosen",
     *      tags={"Dosen"},
     *      description="Get Dosen",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Dosen",
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
     *                  ref="#/definitions/Dosen"
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
        /** @var Dosen $dosen */
        $dosen = $this->dosenRepository->findWithoutFail($id);

        if (empty($dosen)) {
            return $this->sendError('Dosen not found');
        }

        return $this->sendResponse($dosen->toArray(), 'Dosen retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateDosenAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/dosens/{id}",
     *      summary="Update the specified Dosen in storage",
     *      tags={"Dosen"},
     *      description="Update Dosen",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Dosen",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Dosen that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Dosen")
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
     *                  ref="#/definitions/Dosen"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateDosenAPIRequest $request)
    {
        $input = $request->all();

        /** @var Dosen $dosen */
        $dosen = $this->dosenRepository->findWithoutFail($id);

        if (empty($dosen)) {
            return $this->sendError('Dosen not found');
        }

        $dosen = $this->dosenRepository->update($input, $id);

        return $this->sendResponse($dosen->toArray(), 'Dosen updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/dosens/{id}",
     *      summary="Remove the specified Dosen from storage",
     *      tags={"Dosen"},
     *      description="Delete Dosen",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Dosen",
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
        /** @var Dosen $dosen */
        $dosen = $this->dosenRepository->findWithoutFail($id);

        if (empty($dosen)) {
            return $this->sendError('Dosen not found');
        }

        $dosen->delete();

        return $this->sendResponse($id, 'Dosen deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBukuAPIRequest;
use App\Http\Requests\API\UpdateBukuAPIRequest;
use App\Models\Buku;
use App\Repositories\BukuRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class BukuController
 * @package App\Http\Controllers\API
 */

class BukuAPIController extends AppBaseController
{
    /** @var  BukuRepository */
    private $bukuRepository;

    public function __construct(BukuRepository $bukuRepo)
    {
        $this->middleware('auth:api');
        $this->bukuRepository = $bukuRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/bukus",
     *      summary="Get a listing of the Bukus.",
     *      tags={"Buku"},
     *      description="Get all Bukus",
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
     *                  @SWG\Items(ref="#/definitions/Buku")
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
        $this->bukuRepository->pushCriteria(new RequestCriteria($request));
        $this->bukuRepository->pushCriteria(new LimitOffsetCriteria($request));
        $bukus = $this->bukuRepository->all();

        return $this->sendResponse($bukus->toArray(), 'Bukus retrieved successfully');
    }

    /**
     * @param CreateBukuAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/bukus",
     *      summary="Store a newly created Buku in storage",
     *      tags={"Buku"},
     *      description="Store Buku",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Buku that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Buku")
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
     *                  ref="#/definitions/Buku"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateBukuAPIRequest $request)
    {
        $input = $request->all();

        $bukus = $this->bukuRepository->create($input);

        return $this->sendResponse($bukus->toArray(), 'Buku saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/bukus/{id}",
     *      summary="Display the specified Buku",
     *      tags={"Buku"},
     *      description="Get Buku",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Buku",
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
     *                  ref="#/definitions/Buku"
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
        /** @var Buku $buku */
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            return $this->sendError('Buku not found');
        }

        return $this->sendResponse($buku->toArray(), 'Buku retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateBukuAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/bukus/{id}",
     *      summary="Update the specified Buku in storage",
     *      tags={"Buku"},
     *      description="Update Buku",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Buku",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Buku that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Buku")
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
     *                  ref="#/definitions/Buku"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateBukuAPIRequest $request)
    {
        $input = $request->all();

        /** @var Buku $buku */
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            return $this->sendError('Buku not found');
        }

        $buku = $this->bukuRepository->update($input, $id);

        return $this->sendResponse($buku->toArray(), 'Buku updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/bukus/{id}",
     *      summary="Remove the specified Buku from storage",
     *      tags={"Buku"},
     *      description="Delete Buku",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Buku",
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
        /** @var Buku $buku */
        $buku = $this->bukuRepository->findWithoutFail($id);

        if (empty($buku)) {
            return $this->sendError('Buku not found');
        }

        $buku->delete();

        return $this->sendResponse($id, 'Buku deleted successfully');
    }
}

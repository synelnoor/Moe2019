<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSambutanAPIRequest;
use App\Http\Requests\API\UpdateSambutanAPIRequest;
use App\Models\Sambutan;
use App\Repositories\SambutanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Webcore\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SambutanController
 * @package App\Http\Controllers\API
 */

class SambutanAPIController extends AppBaseController
{
    /** @var  SambutanRepository */
    private $sambutanRepository;

    public function __construct(SambutanRepository $sambutanRepo)
    {
        $this->middleware('auth:api');
        $this->sambutanRepository = $sambutanRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/sambutans",
     *      summary="Get a listing of the Sambutans.",
     *      tags={"Sambutan"},
     *      description="Get all Sambutans",
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
     *                  @SWG\Items(ref="#/definitions/Sambutan")
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
        $this->sambutanRepository->pushCriteria(new RequestCriteria($request));
        $this->sambutanRepository->pushCriteria(new LimitOffsetCriteria($request));
        $sambutans = $this->sambutanRepository->all();

        return $this->sendResponse($sambutans->toArray(), 'Sambutans retrieved successfully');
    }

    /**
     * @param CreateSambutanAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/sambutans",
     *      summary="Store a newly created Sambutan in storage",
     *      tags={"Sambutan"},
     *      description="Store Sambutan",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Sambutan that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Sambutan")
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
     *                  ref="#/definitions/Sambutan"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateSambutanAPIRequest $request)
    {
        $input = $request->all();

        $sambutans = $this->sambutanRepository->create($input);

        return $this->sendResponse($sambutans->toArray(), 'Sambutan saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/sambutans/{id}",
     *      summary="Display the specified Sambutan",
     *      tags={"Sambutan"},
     *      description="Get Sambutan",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Sambutan",
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
     *                  ref="#/definitions/Sambutan"
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
        /** @var Sambutan $sambutan */
        $sambutan = $this->sambutanRepository->findWithoutFail($id);

        if (empty($sambutan)) {
            return $this->sendError('Sambutan not found');
        }

        return $this->sendResponse($sambutan->toArray(), 'Sambutan retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateSambutanAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/sambutans/{id}",
     *      summary="Update the specified Sambutan in storage",
     *      tags={"Sambutan"},
     *      description="Update Sambutan",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Sambutan",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Sambutan that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Sambutan")
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
     *                  ref="#/definitions/Sambutan"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateSambutanAPIRequest $request)
    {
        $input = $request->all();

        /** @var Sambutan $sambutan */
        $sambutan = $this->sambutanRepository->findWithoutFail($id);

        if (empty($sambutan)) {
            return $this->sendError('Sambutan not found');
        }

        $sambutan = $this->sambutanRepository->update($input, $id);

        return $this->sendResponse($sambutan->toArray(), 'Sambutan updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/sambutans/{id}",
     *      summary="Remove the specified Sambutan from storage",
     *      tags={"Sambutan"},
     *      description="Delete Sambutan",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Sambutan",
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
        /** @var Sambutan $sambutan */
        $sambutan = $this->sambutanRepository->findWithoutFail($id);

        if (empty($sambutan)) {
            return $this->sendError('Sambutan not found');
        }

        $sambutan->delete();

        return $this->sendResponse($id, 'Sambutan deleted successfully');
    }
}

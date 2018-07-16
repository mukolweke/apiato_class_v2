<?php

namespace App\Containers\Boards\UI\API\Controllers;

use App\Containers\Boards\UI\API\Requests\CreateBoardsRequest;
use App\Containers\Boards\UI\API\Requests\DeleteBoardsRequest;
use App\Containers\Boards\UI\API\Requests\GetAllBoardsRequest;
use App\Containers\Boards\UI\API\Requests\FindBoardsByIdRequest;
use App\Containers\Boards\UI\API\Requests\UpdateBoardsRequest;
use App\Containers\Boards\UI\API\Transformers\BoardsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Boards\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateBoardsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createBoards(CreateBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@CreateBoardsAction', [$request]);

        return $this->created($this->transform($boards, BoardsTransformer::class));
    }

    /**
     * @param FindBoardsByIdRequest $request
     * @return array
     */
    public function findBoardsById(FindBoardsByIdRequest $request)
    {
        $boards = Apiato::call('Boards@FindBoardsByIdAction', [$request]);

        return $this->transform($boards, BoardsTransformer::class);
    }

    /**
     * @param GetAllBoardsRequest $request
     * @return array
     */
    public function getAllBoards(GetAllBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@GetAllBoardsAction', [$request]);

        return $this->transform($boards, BoardsTransformer::class);
    }

    /**
     * @param UpdateBoardsRequest $request
     * @return array
     */
    public function updateBoards(UpdateBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@UpdateBoardsAction', [$request]);

        return $this->transform($boards, BoardsTransformer::class);
    }

    /**
     * @param DeleteBoardsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteBoards(DeleteBoardsRequest $request)
    {
        Apiato::call('Boards@DeleteBoardsAction', [$request]);

        return $this->noContent();
    }
}

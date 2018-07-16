<?php

namespace App\Containers\Dash\UI\API\Controllers;

use App\Containers\Dash\UI\API\Requests\CreateDashRequest;
use App\Containers\Dash\UI\API\Requests\DeleteDashRequest;
use App\Containers\Dash\UI\API\Requests\GetAllDashesRequest;
use App\Containers\Dash\UI\API\Requests\FindDashByIdRequest;
use App\Containers\Dash\UI\API\Requests\UpdateDashRequest;
use App\Containers\Dash\UI\API\Transformers\DashTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Dash\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateDashRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createDash(CreateDashRequest $request)
    {
        $dash = Apiato::call('Dash@CreateDashAction', [$request]);

        return $this->created($this->transform($dash, DashTransformer::class));
    }

    /**
     * @param FindDashByIdRequest $request
     * @return array
     */
    public function findDashById(FindDashByIdRequest $request)
    {
        $dash = Apiato::call('Dash@FindDashByIdAction', [$request]);

        return $this->transform($dash, DashTransformer::class);
    }

    /**
     * @param GetAllDashesRequest $request
     * @return array
     */
    public function getAllDashes(GetAllDashesRequest $request)
    {
        $dashes = Apiato::call('Dash@GetAllDashesAction', [$request]);

        return $this->transform($dashes, DashTransformer::class);
    }

    /**
     * @param UpdateDashRequest $request
     * @return array
     */
    public function updateDash(UpdateDashRequest $request)
    {
        $dash = Apiato::call('Dash@UpdateDashAction', [$request]);

        return $this->transform($dash, DashTransformer::class);
    }

    /**
     * @param DeleteDashRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDash(DeleteDashRequest $request)
    {
        Apiato::call('Dash@DeleteDashAction', [$request]);

        return $this->noContent();
    }
}

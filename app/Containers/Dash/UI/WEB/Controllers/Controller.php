<?php

namespace App\Containers\Dash\UI\WEB\Controllers;

use App\Containers\Dash\UI\WEB\Requests\CreateDashRequest;
use App\Containers\Dash\UI\WEB\Requests\DeleteDashRequest;
use App\Containers\Dash\UI\WEB\Requests\GetAllDashesRequest;
use App\Containers\Dash\UI\WEB\Requests\FindDashByIdRequest;
use App\Containers\Dash\UI\WEB\Requests\UpdateDashRequest;
use App\Containers\Dash\UI\WEB\Requests\StoreDashRequest;
use App\Containers\Dash\UI\WEB\Requests\EditDashRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Dash\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllDashesRequest $request
     */
    public function index(GetAllDashesRequest $request)
    {
        $dashes = Apiato::call('Dash@GetAllDashesAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindDashByIdRequest $request
     */
    public function show(FindDashByIdRequest $request)
    {
        $dash = Apiato::call('Dash@FindDashByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateDashRequest $request
     */
    public function create(CreateDashRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreDashRequest $request
     */
    public function store(StoreDashRequest $request)
    {
        $dash = Apiato::call('Dash@CreateDashAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditDashRequest $request
     */
    public function edit(EditDashRequest $request)
    {
        $dash = Apiato::call('Dash@GetDashByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateDashRequest $request
     */
    public function update(UpdateDashRequest $request)
    {
        $dash = Apiato::call('Dash@UpdateDashAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteDashRequest $request
     */
    public function delete(DeleteDashRequest $request)
    {
         $result = Apiato::call('Dash@DeleteDashAction', [$request]);

         // ..
    }
}

<?php

namespace App\Containers\Committee\UI\WEB\Controllers;

use App\Containers\Committee\UI\WEB\Requests\CreateCommitteeRequest;
use App\Containers\Committee\UI\WEB\Requests\DeleteCommitteeRequest;
use App\Containers\Committee\UI\WEB\Requests\GetAllCommitteesRequest;
use App\Containers\Committee\UI\WEB\Requests\FindCommitteeByIdRequest;
use App\Containers\Committee\UI\WEB\Requests\UpdateCommitteeRequest;
use App\Containers\Committee\UI\WEB\Requests\StoreCommitteeRequest;
use App\Containers\Committee\UI\WEB\Requests\EditCommitteeRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Committee\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllCommitteesRequest $request
     */
    public function index(GetAllCommitteesRequest $request)
    {
        $committees = Apiato::call('Committee@GetAllCommitteesAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindCommitteeByIdRequest $request
     */
    public function show(FindCommitteeByIdRequest $request)
    {
        $committee = Apiato::call('Committee@FindCommitteeByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateCommitteeRequest $request
     */
    public function create(CreateCommitteeRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreCommitteeRequest $request
     */
    public function store(StoreCommitteeRequest $request)
    {
        $committee = Apiato::call('Committee@CreateCommitteeAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditCommitteeRequest $request
     */
    public function edit(EditCommitteeRequest $request)
    {
        $committee = Apiato::call('Committee@GetCommitteeByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateCommitteeRequest $request
     */
    public function update(UpdateCommitteeRequest $request)
    {
        $committee = Apiato::call('Committee@UpdateCommitteeAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteCommitteeRequest $request
     */
    public function delete(DeleteCommitteeRequest $request)
    {
         $result = Apiato::call('Committee@DeleteCommitteeAction', [$request]);

         // ..
    }
}

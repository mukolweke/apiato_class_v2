<?php

namespace App\Containers\Members\UI\WEB\Controllers;

use App\Containers\Members\UI\WEB\Requests\CreateMembersRequest;
use App\Containers\Members\UI\WEB\Requests\DeleteMembersRequest;
use App\Containers\Members\UI\WEB\Requests\GetAllMembersRequest;
use App\Containers\Members\UI\WEB\Requests\FindMembersByIdRequest;
use App\Containers\Members\UI\WEB\Requests\UpdateMembersRequest;
use App\Containers\Members\UI\WEB\Requests\StoreMembersRequest;
use App\Containers\Members\UI\WEB\Requests\EditMembersRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Members\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllMembersRequest $request
     */
    public function index(GetAllMembersRequest $request)
    {
        $members = Apiato::call('Members@GetAllMembersAction', [$request]);

        return view('members::members-index')->with('members', $members);
    }

    /**
     * Show one entity
     *
     * @param FindMembersByIdRequest $request
     */
    public function show(FindMembersByIdRequest $request)
    {
        $members = Apiato::call('Members@FindMembersByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateMembersRequest $request
     */
    public function create(CreateMembersRequest $request)
    {
        return view('members::members-create');
    }

    /**
     * Add a new entity
     *
     * @param StoreMembersRequest $request
     */
    public function store(StoreMembersRequest $request)
    {
        $members = Apiato::call('Members@CreateMembersAction', [$request]);

        return view('members::members-index', compact($members));
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditMembersRequest $request
     */
    public function edit(EditMembersRequest $request)
    {
        $members = Apiato::call('Members@GetMembersByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateMembersRequest $request
     */
    public function update(UpdateMembersRequest $request)
    {
        $members = Apiato::call('Members@UpdateMembersAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteMembersRequest $request
     */
    public function delete(DeleteMembersRequest $request)
    {
         $result = Apiato::call('Members@DeleteMembersAction', [$request]);

         // ..
    }
}

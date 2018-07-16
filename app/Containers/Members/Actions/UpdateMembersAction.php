<?php

namespace App\Containers\Members\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateMembersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $members = Apiato::call('Members@UpdateMembersTask', [$request->id, $data]);

        return $members;
    }
}

<?php

namespace App\Containers\Members\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateMembersAction extends Action
{
    public function run(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        $members = Apiato::call('Members@CreateMembersTask', [$data]);

        return $members;
    }
}

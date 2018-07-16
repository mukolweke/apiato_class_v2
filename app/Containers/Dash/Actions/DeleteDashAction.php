<?php

namespace App\Containers\Dash\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteDashAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Dash@DeleteDashTask', [$request->id]);
    }
}

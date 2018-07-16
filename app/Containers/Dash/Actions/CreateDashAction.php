<?php

namespace App\Containers\Dash\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateDashAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $dash = Apiato::call('Dash@CreateDashTask', [$data]);

        return $dash;
    }
}

<?php

namespace App\Containers\Dash\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindDashByIdAction extends Action
{
    public function run(Request $request)
    {
        $dash = Apiato::call('Dash@FindDashByIdTask', [$request->id]);

        return $dash;
    }
}

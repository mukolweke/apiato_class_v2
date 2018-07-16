<?php

namespace App\Containers\Dash\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllDashesAction extends Action
{
    public function run(Request $request)
    {
        $dashes = Apiato::call('Dash@GetAllDashesTask');

        return $dashes;
    }
}

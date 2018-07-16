<?php

namespace App\Containers\Boards\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateBoardsAction extends Action
{
    public function run(Request $request)
    {

        $data = [
            'name'=>$request->input('name'),
            'description'=>$request->input('description')
        ];

        $boards = Apiato::call('Boards@CreateBoardsTask', [$data]);

        return $boards;
    }
}

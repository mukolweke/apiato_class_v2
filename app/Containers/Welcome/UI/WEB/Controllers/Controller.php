<?php

namespace App\Containers\Welcome\UI\WEB\Controllers;

use App\Containers\Boards\UI\WEB\Requests\GetAllBoardsRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;


/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  string
     */
//    public function sayWelcome()
//    {
//        // No actions to call. Since there's nothing to do but returning a response.
//
//        return view('welcome::welcome-page');
//    }


    public function index()
    {
        return view('welcome::index');
    }

    public function board(GetAllBoardsRequest $request)
    {
        $boards = Apiato::call('Boards@GetAllBoardsAction', [$request]);

        return view('boards::board-index')->with('boards', $boards);
    }

    public function member(GetAllBoardsRequest $request)
    {
        $members = Apiato::call('Members@GetAllMembersAction', [$request]);
        return view('members::members-index')->with('members', $members);
    }

    public function committee(GetAllBoardsRequest $request)
    {
        $committees = Apiato::call('Committees@GetAllCommitteesAction', [$request]);

        return view('committee::committee-index')->with('committees', $committees);
    }
}

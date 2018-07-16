<?php

namespace App\Containers\Blog\UI\WEB\Controllers;

use Apiato\Core\Foundation\Apiato;
use App\Containers\Blog\Actions\PostContentToDatabase;
use App\Containers\Blog\Models\TestClass;
use App\Ship\Parents\Controllers\WebController;

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

    public function showIndex(){

        return view('blog::home-blog');

    }


    public function postForm($request){

        dd($request);

        $this->validate($request,[
            'title'=>'required',
            'body'=> 'required'
        ]);

        $title = $request->title;
        dd($title);

        // create post
//        $user = Apiato::call(PostContentToDatabase::class, [$request]);

        return view('blog::home-blog');

//        return redirect('/posts')->with('success', 'Posts Created');

//        return view('blog::home-blog');

    }
}

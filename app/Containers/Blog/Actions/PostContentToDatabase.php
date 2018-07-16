<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 13/07/2018
 * Time: 16:01
 */

namespace App\Containers\Blog\Actions;

use App\Containers\Blog\Models\Blog;
use App\Ship\Parents\Actions\Action;


class PostContentToDatabase extends Action{


    public function run($request)
    {
        $post = new Blog();
        $post->title = $request['title'];
        $post->body = $request['body'];

        return $post;
    }


}
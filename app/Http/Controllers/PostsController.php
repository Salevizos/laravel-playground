<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostsController
{
   public function show($slug)
   {
       $post = \DB::table('posts')->where('slug',$slug)->first();
       // $posts  = [
         //   '1' => 'hi, this is a first post!',
           // '2' => 'now, im getting the hang of this damn thing.'

        //];
        if (!$post) {
            abort(404);
        }

        return view('test', [
            'post' => $post


        ]);
    }
}


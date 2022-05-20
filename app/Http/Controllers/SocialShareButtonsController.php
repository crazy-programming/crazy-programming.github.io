<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SocialShareButtonsController extends Controller
{ 
   public function index()
   {
    $data=Post::orderBy('id','desc')->get();
    return view('post_index', compact('data'));

}


public function ShareWidget($id)
    {
        $singles =Post::whereId($id)->get();
        foreach ($singles as $single) {
            $description=$single->description;
        }
        $url=url()->current();

        $shareComponent = \Share::page(
            // 'Your share text comes here',
            // "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
            $url

        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->pinterest()      
        ->reddit();
        
        return view('posts', compact('shareComponent','singles'));
    }
}

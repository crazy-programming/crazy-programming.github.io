<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function myPost(Request $request)
    {
    	$posts = Post::OrderBy('id','desc')-> paginate(10);


    	if ($request->ajax()) {
    		$view = (string)view('data',compact('posts'));//->render();
            return response()->json(['html'=>$view]);
        }


    	return view('my-post',compact('posts'));
    }
}

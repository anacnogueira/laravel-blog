<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	// $posts = [
    	// 	'Post 1' => 'Este o conteúdo do post 1',
    	// 	'Post 2' => 'Este o conteúdo do post 2',
    	// 	'Post 3' => 'Este o conteúdo do post 3',
    	// 	'Post 4' => 'Este o conteúdo do post 4',
    	// 	'Post 5' => 'Este o conteúdo do post 5',
    	// ];

        $posts = \App\Post::all();

        return view('posts.index', compact('posts'));
    }
}

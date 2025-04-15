<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * @public function index()
     */
    public function index() :Response
    {
        return Inertia::render('Dashboard',[
            'posts' => Post::all(),
            'csrf_token' => csrf_token()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard',[
            'posts' => Post::all(),
            'csrf_token' => csrf_token()
        ]);
    }
}

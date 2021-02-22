<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FunnersController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function createPost()
    {
        $category = Category::all();
        $type = PostType::all();
        return view('admin.karyaCreate', compact('category','type'));
    }

    public function post()
    {
        $data = Post::all()->where('user_id',Auth::id());
        return view('funner.post', compact('data'));
    }
}

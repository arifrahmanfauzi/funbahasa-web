<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()&&Auth::user()->role==1) {
            return redirect()->route('admin.user');
        } elseif(Auth::check()&&Auth::user()->role==3) {
            return redirect()->route('funner.profile');
        } elseif(Auth::check()&&Auth::user()->role==2){
            return redirect()->route('juri.event');
        };
    }

    public function home()
    {
        return view('user.index');
    }

    public function event()
    {
        return view('user.event');
    }

    public function read()
    {
        $data = PostCategory::join('posts','posts.id','=','post_categories.post_id')
                ->join('categories','categories.id','=','post_categories.category_id')
                ->select('posts.*','categories.name as kategori','post_categories.id as id_post')
                ->where('posts.status',5)
                ->get();
        return view('user.read',compact('data'));
    }

    public function readDetail($id)
    {
        $post = PostCategory::join('posts','posts.id','=','post_categories.post_id')
                ->join('categories','categories.id','=','post_categories.category_id')
                ->select('posts.*','categories.name as kategori')
                ->where('post_categories.id',$id)
                ->first();
        return view('user.detailPost',compact('post'));
    }

    public function unggahKarya()
    {
        return view('user.unggahKarya');
    }

    public function tentangKami()
    {
        return view('user.tentangKami');
    }
}

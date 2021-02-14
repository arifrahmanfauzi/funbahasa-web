<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostStatus;
use App\Models\PostType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        // return view('admin.index');
    }

    public function user()
    {
        $data = User::all()->where('role',3);
        return view('admin.user',compact('data'));
    }

    public function userDestroy(User $user)
    {
        User::destroy($user->id);
        return back()->with('success','User deleted!');
    }

    public function karya()
    {
        $umum = Post::all()->where('type',3);
        $fppn = Post::all()->where('type',2);
        $kppn = Post::all()->where('type',1);
        $status = PostStatus::all();
        return view('admin.karya',compact('umum','status','fppn','kppn'));
    }

    public function karyaCreate()
    {
        $category = Category::all();
        $type = PostType::all();
        return view('admin.karyaCreate', compact('category','type'));
    }

    public function juri()
    {
        $data = User::all()->where('role',2);
        return view('admin.juri',compact('data'));
    }

    public function juriStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 2;
            $user->save();
            return back()->with('success','User created!');
    }
}

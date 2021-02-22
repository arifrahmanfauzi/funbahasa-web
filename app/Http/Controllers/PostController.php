<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

        /*
            status post
            0 = pending
            1 = reviewed
            2 = accepted
            3 = Pending to publish
            4 = published
            5 = scheduled
        */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'author' => 'required',
            'content' => 'required',
            'title' => 'required',
            'type' => 'required',
            'post_excerpt' => 'required',
        ]);

        $post = Post::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'status' => 1,
            'author' => $request->author,
            'title' => $request->title,
            'content' => $request->content,
            'post_excerpt' => $request->post_excerpt,
        ]);

        for ($i=0; $i < count($request->kategori); $i++) {
            PostCategory::create([
                'post_id' => $post->id,
                'category_id' => $request->kategori[$i],
            ]);
        }

        return back()->with('success','Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'type' => 'required',
            'post_excerpt' => 'required',
        ]);

        Post::find($post->id)->update([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'type' => $request->type,
            'post_excerpt' => $request->post_excerpt,
            'schedule' => $request->schedule,
            'status' => 0,
        ]);

        return back();
    }

    public function updateStatus(Post $post, Request $request)
    {
        Post::find($post->id)->update([
            'status' => $request->status,
        ]);

        return back()->with('success','status changed!');
    }

    public function updatePoint(Post $post, Request $request)
    {
        Post::find($post->id)->update([
            'point' => $request->point,
        ]);

        return back()->with('success','point changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return back()->with('success','Post deleted!');
    }
}

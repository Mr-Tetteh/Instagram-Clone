<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PostResource::collection(Post::latest()->get());
    }

    public function user_posts()
    {
        return PostResource::collection(Post::where('user_id', Auth::id())->get());

    }

    public function pub_profile(Request $request)
    {
        $user = $request->id;
        return PostResource::collection(Post::where('user_id', $user)->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has('image')){
         $path =    $request->file('image')->store( 'images','public');
        }else{
           $path = null;
        }

        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'image' => $path,
            'post' => $request->input('post'),
            'location' => $request->input('location'),
        ]);
        return new PostResource($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

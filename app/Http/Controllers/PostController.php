<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PostCollection(Post::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        if(!Post::create($request->validated())) {
            return response([
                'error' => 'Failed to create'
            ]);
        } 

        return new PostResource(Post::latest()->first());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        if(!$post->update($request->validated())) {
            return response([
                'error' => 'Failed to update'
            ]);
        } 

        return response([
            'success' => 'Post Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(!$post->delete()) {
            return response([
                'error' => 'Failed to delete'
            ]);
        } 

        return response([
            'success' => 'Post Deleted'
        ]);
        
    }
}

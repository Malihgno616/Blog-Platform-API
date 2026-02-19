<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Exception;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Posts::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:100',
            'tags' => 'array',
        ]);

        $post = Posts::create($validate);

        if($request->method() === 'POST') {            
            try {
                return response()->json([
                    'message' => 'Post created successfully',
                    'data' => $post
                ], 201);
            } catch (Exception $e) {
                return response()->json([
                    'message' => 'Failed to create post',
                    'error' => $e->getMessage()
                ], 500);
            }
        } else {
            return response()->json([
                'message' => 'Invalid request method'
            ], 405);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $id)
    {
        return $id;    
    }

    public function search(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, Posts $posts)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:100',
            'tags' => 'array',
        ]);

        $posts->update($validate);

        if($request->method() === "PUT") {
            try {
                return response()->json([
                    "message" => "Post updated successfully!",
                    "data" => $posts
                ]);
            } catch (Exception $e) {
                return response()->json([
                    'message' => 'Failed to update the post',
                    'error' => $e->getMessage()
                ], 500);
            }
        } else {
            return response()->json([
                'message' => 'Invalid request method'
            ], 405);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $id)
    {
       try {
        $posts = Posts::findOrFail($id->id);

        if(!$posts) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        } else {
            $posts->delete();
            return response()->json([
                'message' => 'Post deleted successfully'
            ], 200);
        }
       } catch (Exception $e) {
        return response()->json([
            'message' => 'Failed to delete post',
            'error' => $e->getMessage()
        ], 500);
       }  
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // ১. সব পোস্ট দেখানোর জন্য (GET)
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'status' => true,
            'data' => $posts
        ], 200);
    }

    // ২. নতুন পোস্ট তৈরি করার জন্য (POST)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Post Created Successfully!',
            'data' => $post
        ], 201);
    }

    // ৩. নির্দিষ্ট একটি পোস্ট দেখানোর জন্য (GET)
    public function show(Post $post)
    {
        return response()->json([
            'status' => true,
            'data' => $post
        ], 200);
    }

    // ৪. পোস্ট আপডেট করার জন্য (PUT/PATCH)
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
        ]);

        $post->update($request->only(['title', 'content']));

        return response()->json([
            'status' => true,
            'message' => 'Post Updated Successfully!',
            'data' => $post
        ], 200);
    }

    // ৫. পোস্ট ডিলিট করার জন্য (DELETE)
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'status' => true,
            'message' => 'Post Deleted Successfully!'
        ], 200);
    }
    public function importExternalPost($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");

        if ($response->successful()) {
            $externalPost = $response->json();

            // নিজস্ব ডাটাবেসে সেভ করা
            $myPost = Post::create([
                'title'   => $externalPost['title'],
                'content' => $externalPost['body'],
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Post imported into local database!',
                'data'    => $myPost
            ], 201);
        }

        return response()->json(['status' => false, 'message' => 'Import failed'], 400);
    }
    public function showUi()
    {
        return view('blog-app');
    }
    // External ব্লগ দেখানোর পেজ
    public function showExternal()
    {
        return view('external-blogs');
    }
}
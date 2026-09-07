<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalBlogController extends Controller
{
    // ১. বাহ্যিক সাইট থেকে সব পোস্ট এনে দেখাবে
    public function fetchExternalPosts()
    {
        // JSONPlaceholder API থেকে পোস্টের ডাটা ফেচ করা হচ্ছে
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        // রেসপন্স সফল হয়েছে কিনা চেক করা
        if ($response->successful()) {
            return response()->json([
                'status' => true,
                'source' => 'External API (JSONPlaceholder)',
                'data' => $response->json() // ডাটা Array আকারে রিটার্ন করবে
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Failed to fetch posts from external API'
        ], 500);
    }

    // ২. নির্দিষ্ট একটি আইডি দিয়ে সিঙ্গেল পোস্ট এনে দেখাবে
    public function fetchSingleExternalPost($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");

        if ($response->successful()) {
            return response()->json([
                'status' => true,
                'data' => $response->json()
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Post not found on external API'
        ], 404);
    }
    public function showInWeb()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        
        // ডাটা অ্যারেতে কনভার্ট করা (প্রথম ১০টি পোস্ট নেওয়া হচ্ছে)
        $posts = collect($response->json())->take(10); 

        return view('blogs', compact('posts'));
    }
}
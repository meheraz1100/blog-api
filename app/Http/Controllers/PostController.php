<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function allPosts()
    {
        
        $posts = Post::with('user')->latest()->get();
        return view('posts.all', compact('posts'));
    }


 public function myPosts()
{
    ([
        'auth_check' => Auth::check(),
        'auth_id' => Auth::id(),
        'user' => Auth::user(),
    ]);

    $posts = auth()->user()->posts()->latest()->get();

    return view('posts.my-blogs', compact('posts'));
}

public function store(Request $request)
{
    ([
    'url' => request()->fullUrl(),
    'host' => request()->getHost(),
    'session_id' => session()->getId(),
    'session_data' => session()->all(),
    'auth_check' => Auth::check(),
    'auth_id' => Auth::id(),
]);

    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    Auth::user()->posts()->create([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect()
        ->route('blogs.my')
        ->with('success', 'Blog published successfully!');
}


    public function destroy(Post $post)
    {
        if ($post->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
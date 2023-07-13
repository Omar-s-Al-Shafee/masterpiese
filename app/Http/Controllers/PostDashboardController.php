<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostDashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.postdashboard.post', compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Add any additional logic or redirect as needed

        return redirect()->back();
    }
}

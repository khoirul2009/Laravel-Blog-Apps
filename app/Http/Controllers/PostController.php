<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'by : ' . $author->name;
        }
        return view('post.post', [
            "title"     => "All Post " . $title,
            "active"     => "All Post",
            "posts"     => Post::with(['author', 'category'])
                ->latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6)
                ->withQueryString(),
            "categories" => Category::all()->take(8)
        ]);
    }
    public function show(Post $post)
    {
        return view('post.detailPost', [
            "title"     => $post->title,
            "active"     => "All Post",
            "post"     => $post,

        ]);
    }
    public function categories()
    {
        return view('post.categories', [
            'title' => 'All Categories',
            'active' => '',
            'categories' => Category::all()
        ]);
    }
}

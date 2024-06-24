<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getIndex(){
        $posts = Post::paginate(2);
        return view('post/index', compact('posts'));
    }

    public function getIndexbyCategory($id){
        $category = Category::findOrFail($id);
        $posts = Post::where('category_id', $category->id)
                    ->with('category')
                    ->paginate(2);
        return view('post/index', compact('posts'));
    }

    public function getShow($id){
        $post = Post::findOrFail($id);
        return view('post/show', compact('post'));
    }

    public function getEdit($id){
        if (Auth::guest()){
            return redirect(url('login'));
        }
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('post/edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->habilitated = $request->has('habilitated') ? 1 : 0;
        $category = Category::find($request->category);
        $post->category()->associate($category);
        $user = User::find($request->user);
        $post->user()->associate($user);
        $post->content = $request->content;
        $post->save();
        return redirect(url('/post'));
    }

    public function getCreate(){
        if (Auth::guest()){
            return redirect(url('login'));
        }
        $categories = Category::all();
        return view('post/create', compact('categories'));
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->habilitated = $request->has('habilitated') ? 1 : 0;
        $category = Category::find($request->category);
        $post->category()->associate($category);
        $user = User::find($request->user);
        $post->user()->associate($user);
        $post->content = $request->content;
        $post->save();
        return redirect(url('/post'));
    }
}

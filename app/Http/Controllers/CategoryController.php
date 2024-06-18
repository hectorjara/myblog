<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function getIndex(){
        if (Auth::guest()){
            return redirect(url('login'));
        }
        $categories = Category::all();
        return view('category/index', compact('categories'));
    }

    public function getShow($id){
        if (Auth::guest()){
            return redirect(url('login'));
        }
        $category = Category::findOrFail($id);
        return view('category/show', compact('category'));
    }

    public function getCreate(){
        if (Auth::guest()){
            return redirect(url('login'));
        }
        return view('category/create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->nombre = $request->nombre;
        $category->habilitated = $request->has('habilitated') ? 1 : 0;
        $category->save();
        return redirect(url('/category'));
    }

    public function getEdit($id){
        if (Auth::guest()){
            return redirect(url('login'));
        }
        $category = Category::findOrFail($id);
        return view('category/edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->nombre = $request->nombre;
        $category->habilitated = $request->has('habilitated') ? 1 : 0;
        $category->save();
        return redirect(url('/category'));
    }
}

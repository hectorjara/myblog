<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex(){
        $categories = Category::all();
        return view('category/index', compact('categories'));
    }

    public function getShow($id){
        $category = Category::findOrFail($id);
        return view('category/show', compact('category'));
    }

    public function getCreate(){
        return view('category/create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->nombre = $request->nombre;
        //$category->habilitated = $request->habilitated;
        $category->habilitated = $request->has('habilitated') ? 1 : 0;
        $category->save();
        return redirect(url('/category'));
    }

    public function getEdit($id){
        $category = Category::findOrFail($id);
        return view('category/edit', compact('category'));
    }
}

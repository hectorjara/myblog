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

    public function getEdit($id){
        return view('category/edit',["id"=>$id]);
    }
}

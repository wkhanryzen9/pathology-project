<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function add(){
        return view('category.add');
    }

    function store(Request $req){
        $validated=$req->validate(['name' => 'Required']);
        Category::create($validated);
        return redirect()->route('category.index')->with('category', "category added");
    }
    
    function index(){
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    function edit($id){
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    function update(Request $req){
        $catg = Category::find($req->id);
        $catg->name = $req->name;
        $catg->save();
        return redirect('/');
    }

}

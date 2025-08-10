<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    function index(){
        $sub_categories = SubCategory::all();
        return view('sub_category.index', compact('sub_categories'));
    }
    function add(){
        $categories = Category::all();
        return view('sub_category.add', compact('categories'));
    }
    function store(Request $req){
        // $req->validate(['category_id'=>'required', 'name'=>'required']);
        // SubCategory::create(['category_id'=>$req->category_id, 'name'=>$req->name]);
        $sub_category = new SubCategory;
        $sub_category->category_id = $req->category_id;
        $sub_category->name = $req->name;
        $sub_category->save();
        return redirect('/subcategory');
    }
    function edit($id){
        $sub_category = SubCategory::find($id);
        $category = Category::all();
        return view('sub_category.edit', compact('sub_category', 'category'));
    }
    function update(Request $req){
        $sb = SubCategory::find($req->id);
        $sb->id = $req->id;
        $sb->category_id = $req->category_id;
        $sb->name = $req->name;
        $sb->save();
        return redirect('/subcategory');
    }
}

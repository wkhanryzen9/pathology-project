<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::with('Category', 'SubCategory')->get();

        return view('test.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('test.add', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $test = new Test;
        $test->category_id = $req->category_id;
        $test->sub_category_id = $req->sub_category_id;
        $test->name = $req->name;
        $test->lower_value = $req->lower_value;
        $test->upper_value = $req->upper_value;
        $test->save();
        return redirect('/test');
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $test = Test::find($id);
        $category_name = Category::all();
        $sub_category_name = SubCategory::all();
        return view('test.edit', compact('test', 'category_name', 'sub_category_name'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $test = Test::find($request->id);
        $test->category_id = $request->category_id;
        $test->sub_category_id = $request->sub_category_id;
        $test->name = $request->name;
        $test->lower_value = $request->lower_value;
        $test->upper_value = $request->upper_value;
        $test->save();
        return redirect('/test');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        return redirect('/test');
    }
}

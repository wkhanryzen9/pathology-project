<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Test;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Spatie\Laravel\Pdf\Facades\Pdf;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $tests = Test::all();
        $reports = Report::all();
        return view('report.index', compact('categories', 'sub_categories', 'tests', 'reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $sub_category = SubCategory::all();
        $tests = Test::all();
        return view('report.add', compact('category', 'sub_category', 'tests'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = new Report;
        
        $report->category_id = $request->category;
        $report->sub_category_id = $request->sub_category;
        $report->test_id = $request->test;
        $report->patient_name = $request->patient_name;
        $report->patient_age = $request->patient_age;
        $report->ref_by_doctor = $request->ref_by_doctor;
        $report->result = $request->result;
        $report->save();
        
        return redirect('/report');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }

    public function view_report($id){
        $report = Report::find($id);
        $template = view('report.view_report', ['report'=>$report])->render();
        Browsershot::html($template)->save(storage_path('/app/public/report'.$report->id.'.pdf'));
    }
}

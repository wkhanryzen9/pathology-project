@extends('layouts.app')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Report List</h3>
                </div>
                <div class="col-md-6 text-end"> <a href="{{route('report.add')}}" class="btn btn-primary mb-3">Add Report</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>User Details</th>
                                <th>Refer By Doctor</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($reports as $report)
                                <tr>
                                <td>{{$report->id}}</td>
                                <td>{{$report->category->name}}</td>
                                <td>{{$report->subcategory->name}}</td>
                                <td>
                                    <div>
                                        <strong>Name : {{$report->patient_name}}</strong><br>
                                        <strong>Age : {{$report->patient_age}}</strong> <br>
                                    </div>
                                </td>
                                <td>{{$report->ref_by_doctor}}</td>
                                <td>
                                    <form onsubmit="if(!confirm('Are You sure want to delete ?')){ return false; }"
                                        method="POST" action="">

                                        <a href="" class="btn btn-info btn-sm">View</a>
                                        <a href="{{route('report.view_report', $report->id)}}" class="btn btn-primary btn-sm">Report</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @endsection
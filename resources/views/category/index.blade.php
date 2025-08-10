@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <div class="text-end">
                <a class="btn btn-primary" href="{{route('add_category')}}">Add New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="text-center" colspan="3">No data found</td>
                        </tr>
                        <?php $i=1; ?>
                        @foreach($categories as $data)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$data['name']}}</td>
                            <td><a class="btn btn-primary" href="{{route('category.edit', $data->id)}}">Edit</a>
                        <tr>
                        <?php $i++; ?>
                        @endforeach
                <tbody>
            </table>
        </div>
    </div>
</div>
@endsection


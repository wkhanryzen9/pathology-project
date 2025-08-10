@extends('layouts.app')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Test List</h3>
                </div>
                <div class="col-md-6 text-end"> <a href="{{route('test.add')}}" class="btn btn-primary mb-3">Add New Test</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    
                        <p>No Test found.</p>
            
                        <table class="table table-bordered table-striped">
                            <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>SubCategory</th>
                                    <th>Name</th>
                                    <th>Lower Value</th>
                                    <th>Upper Value</th>
                                    {{-- <th>Lower Value</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach ($tests as $test)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$test->Category->name}}</td>
                                        <td>{{$test->SubCategory->name}}</td>
                                        <td>{{$test->name}}</td>
                                        <td>{{$test->lower_value}}</td>
                                        <td>{{$test->upper_value}}</td>
                                        {{-- <td></td> --}}
                                        <td>
                                            <a href="" class="btn btn-info btn-sm">View</a>
                                            <a href="{{route('test.edit', $test->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{route('test.delete', $test->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                            {{-- <form action="" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                                
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
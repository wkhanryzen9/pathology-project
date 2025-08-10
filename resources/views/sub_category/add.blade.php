@extends('layouts.app')
@section('content')

<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">SubCategory create</h3>
                </div>
                <div class="col-md-6 text-end"> <a href="" class="btn btn-primary mb-3">Add New SubCategory</a></div>
            </div>   
        </div>
        <div class="card-body">
            <form action="{{route('sub_category.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="">Choose Category</option>
                        @foreach ($categories as $item)

                        <option value="{{$item->id}}">{{$item->name}}</option>
                            
                        @endforeach

                    </select>


                    <span class="text-danger small">message</span>

                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">SubCategory Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>

                    <span class="text-danger small">message</span>

                </div>


                <button type="submit" class="btn btn-primary">Save</button>
                <a href="" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection
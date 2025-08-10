@extends('layouts.app')
@section('content')

<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Edit Sub-category</h3>
                </div>
                <div class="col-md-6 text-end"> <a href="" class="btn btn-primary mb-3">Add New SubCategory</a></div>
            </div>   
        </div>
        <div class="card-body">
            <form action="{{route('sub_category.update')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        
                        <option value="{{$sub_category->category_id}}">{{$sub_category->category->name}}</option>
                        @foreach ($category as $cat)

                        @if (in_array($cat->id, [$sub_category->category_id]))
                        @continue
                        @endif

                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        
                        @endforeach

                    </select>


                    <span class="text-danger small">message</span>

                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">SubCategory Name</label>
                    <input type="hidden" class="form-control" id="name" name="id" value="{{$sub_category->id}}" required>
                    <input type="text" class="form-control" id="name" name="name" value="{{$sub_category->name}}" required>

                    <span class="text-danger small">message</span>

                </div>


                <button type="submit" class="btn btn-primary">Update</button>
                <a href="" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
                <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Edit Test</h3>
                </div>
                <div class="col-md-6 text-end"> <a href=" " class="btn btn-primary mb-3">Add New Test</a></div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('test.update')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="{{$test->category_id}}">{{$test->category->name}}</option>
                        @foreach ($category_name as $c)
                        
                        @if (in_array($c->id, [$test->category_id]))
                        @continue
                        @endif
                        <option value="{{$c->id}}">{{$c->name}}</option>
                             
                        @endforeach
                    
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sub_category_id" class="form-label">Select SubCategory</label>
                    <select name="sub_category_id" id="sub_category_id" class="form-select" required>
                        
                        <option value="{{$test->sub_category_id}}">{{$test->subcategory->name}}</option>
                        @foreach ($sub_category_name as $scn)

                        @if (in_array($scn->id, [$test->sub_category_id]))
                        @continue
                        @endif

                        <option value="{{$scn->id}}">{{$scn->name}}</option>
                        
                        @endforeach
                    
                    </select>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{$test->id}}">
                    <label for="name" class="form-label">Test Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$test->name}}" required>
                </div>
                <div class="mb-3">
                    <label for="lower_value" class="form-label">Lower Value</label>
                    <input type="text" step="0.01" class="form-control" id="lower_value" name="lower_value" value="{{$test->lower_value}}" required>
                </div>
                <div class="mb-3">
                    <label for="upper_value" class="form-label">Upper Value</label>
                    <input type="text" step="0.01" class="form-control" id="upper_value" name="upper_value" value="{{$test->upper_value}}" required>
                </div>
                {{-- <div class="mb-3">
                    <label for="lower_value" class="form-label">Lower Value</label>
                    <input type="number" step="0.01" class="form-control" id="lower_value" name="lower_value" required>
                </div> --}}
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
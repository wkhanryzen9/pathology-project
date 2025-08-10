@extends('layouts.app')

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
                <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Test Create</h3>
                </div>
                <div class="col-md-6 text-end"> <a href=" " class="btn btn-primary mb-3">Add New Test</a></div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('test.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        <option value="">Choose Category</option>

                        @foreach ($categories as $c)
                        
                        <option value="{{$c->id}}">{{$c->name}}</option>
                             
                        @endforeach
                    
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sub_category_id" class="form-label">Select SubCategory</label>
                    <select name="sub_category_id" id="sub_category_id" class="form-select" required>
                        <option value="">Choose Category</option>
                        
                        @foreach ($subcategories as $sc)

                        <option value="{{$sc->id}}">{{$sc->name}}</option>
                            
                        @endforeach
                    
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Test Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="lower_value" class="form-label">Lower Value</label>
                    <input type="text" step="0.01" class="form-control" id="lower_value" name="lower_value" required>
                </div>
                <div class="mb-3">
                    <label for="upper_value" class="form-label">Upper Value</label>
                    <input type="text" step="0.01" class="form-control" id="upper_value" name="upper_value" required>
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
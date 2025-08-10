@extends('layouts.app')

@section('content')
<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title_">Create Report</h4>
                </div>
                <div class="col-md-6 text-end"> <a href="" class="btn btn-primary mb-3">Add New Category</a></div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('report.store')}}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patient_name">Patient Name</label>
                            <input type="text" class="form-control" name="patient_name" id="patient_name" required
                                placeholder="Patient name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patient_age">Patient Age</label>
                            <input type="text" class="form-control" name="patient_age" id="patient_age" required
                                placeholder="Patient age">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ref_by_doctor">Patient Refer By Doctor</label>
                            <input type="text" class="form-control" name="ref_by_doctor" id="ref_by_doctor" required
                                placeholder="Patient Refer By Doctor">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">-- Select Category --</option>

                                @foreach ($category as $ctg)

                                <option value="{{$ctg->id}}">{{$ctg->name}}</option>
                                    
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sub_category">Sub Category</label>
                            <select name="sub_category" id="sub_category" class="form-control" required>
                                <option value="">-- Select Sub Category --</option>

                                @foreach ($sub_category as $sb)

                                <option value="{{$sb->id}}">{{$sb->name}}</option>
                                    
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="test">Tests</label>
                            {{-- <select name="test[]" id="test" class="form-control" required multiple="multiple"> --}}
                            <select name="test" id="test" class="form-control" required>
                                <option value="">-- Select Test --</option>

                                @foreach ($tests as $t)

                                <option value="{{$t->id}}">{{$t->name}}</option>
                                    
                                @endforeach

                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="test">Select Tests:</label>
                            <div id="test">
                                @foreach ($tests as $t)
                                    <div>
                                        <input type="checkbox" name="test[]" id="test_{{ $t->id }}" value="{{ $t->id }}">
                                        <label for="test_{{ $t->id }}">{{ $t->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div> --}}
                        
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="result">Test Result</label>
                            <input type="text" class="form-control" name="result" id="result" required
                                placeholder="Test result">
                        </div>
                    </div>
                </div>

                <div class=" form-group mt-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('report.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection
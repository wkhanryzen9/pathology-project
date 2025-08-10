@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <h5 class="card-header">Category Name</h5>
        <div class="card-body">
          <div>
            <form method="post" action="{{route('category.store')}}">
              @csrf
              <label for="defaultFormControlInput" class="form-label">Name</label>
              <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe"
                aria-describedby="defaultFormControlHelp" name="name" />
              <div id="defaultFormControlHelp" class="form-text">
                We'll never share your details with anyone else.
                <input type="submit" value="Add Category" class="ml-4 btn btn-primary">
            </form>
          </div>
        </div> 
      </div>
    </div> 
  </div>
  <div id="floatingInputHelp" class="form-text">
    We'll never share your details with anyone else.

  </div>
</div>
</div>
</div>



</div>

</div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
          <a class="btn btn-primary" href="{{route('sub_category.add')}}">Add New</a>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Sub-Category Name</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">

            @foreach ($sub_categories as $item)
              <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->category->name}}</td>
              <td>
                {{$item->name}}
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('sub_category.edit', $item->id)}}"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
@endsection
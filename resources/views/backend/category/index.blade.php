@extends('backend.layout.master')
@section('title', 'All Categories')

@section('content')
<div class="col-md-6">
  {{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}
  @if (Session::has('success'))
    <div class="alert alert-success" id="alert">
        {{ Session::get('success') }}
    </div>
@endif
  <h2 class="text-center"><a class="btn btn-info" href="{{ route('categories.create') }}">Add Category</a></h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Category Name</th>
          <th>Category Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)  
            <tr>
              <td>{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
              <td>
                <a class="btn btn-info btn-sm" href="{{ route('categories.show',$category->id) }}">Show</a>
                <a class="btn btn-warning btn-sm" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                <form class="d-inline-block" action="{{ route('categories.destroy',$category->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
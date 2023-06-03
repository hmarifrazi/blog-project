@extends('backend.layout.master')
@section('title','Show Details')

@section('content')
<div class="col-md-6">
  <div class="card">
    <div class="card-header">
      <h2><a class="btn btn-info" href="{{ route('categories.index') }}">Show All Categories</a></h2>
    </div>
      <div class="card-body">

        <h3>Category Name</h3>
        <p>{{ $category->name }}</p>

        <h3>Category Description</h3>
        <p>{{ $category->description }}</p>

      </div>
  </div>
    
</div>
@endsection
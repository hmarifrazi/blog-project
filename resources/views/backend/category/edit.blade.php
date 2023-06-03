@extends('backend.layout.master')
@section('title','Edit Category')
       @section('content')
       <div class="col-md-6">
        <h2>Edit Category</h2>
        <form action="{{ route('categories.update',$category->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
          </div>
            <div class="form-group">
              <label for="name">Category Description</label>
              <input type="text" class="form-control" id="name" name="description" value="{{ $category->description}}">
            </div>
            <div class="form-group">
                <br>
              <input type="submit" class="btn btn-success" value="Update" >
            </div>
        </form>
      </div>
       @endsection
      

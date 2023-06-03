@extends('backend.layout.master')
@section('title','Add New')
       @section('content')
       <div class="col-md-6">
        <h2>Add Category</h2>
        <form action="{{ route('categories.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
            @error('name')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
            <div class="form-group">
              <label for="name">Category Description</label>
              <input type="text" class="form-control" id="name" name="description" placeholder="Category Description">
                @error('description')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <br>
              <input type="submit" class="btn btn-success" value="Submit" >
            </div>
        </form>
      </div>
       @endsection
      

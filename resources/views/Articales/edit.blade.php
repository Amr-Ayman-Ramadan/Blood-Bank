@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
  Update Articales
 @endsection
 @section("small_title")
 Update Articales
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Update Articales </h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        @include("patials.validation_errors")
        <form action="{{url("articales/{$record->id}")}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" name="title" value="{{$record->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Content</label>
                <input type="text" name="content" value="{{$record->content}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Categories</label>
                <select name="category_id" class="form-control" id="">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">create</button>
            </div>
        </form>
     </div>
      <!-- /.card-body -->
   
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->

@endsection

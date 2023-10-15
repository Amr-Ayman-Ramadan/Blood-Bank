@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
  Update Categories
 @endsection
 @section("small_title")
 Update Categories
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Update Categories </h3>

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
        @include('flash::message')
        @include("patials.validation_errors")
        <form action="{{url("categories/{$category->id}")}}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
     </div>
      <!-- /.card-body -->
   
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->

@endsection

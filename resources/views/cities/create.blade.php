@extends('layouts.app')
@inject("governorate","App\Models\Governorate")
@inject("cities","App\Models\City")
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
  Create  cities
 @endsection
 @section("small_title")
 Create  cities
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Create  cities </h3>

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
        <form action="{{url(route("cities.store"))}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Governorate</label>
                <select name="governorate_id" class="form-control" id="">
                    @foreach ($records as $record )
                    <option value="{{$record->governorate_id}}">{{$record->governorate->name}}</option>
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

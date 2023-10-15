@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
  Create Clients
 @endsection
 @section("small_title")
 Create Clients
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Create Clients </h3>

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
        <form action="{{url(route('clients.store'))}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">D_O_B</label>
                <input type="date" name="d_o_b" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Last_Donation_Date</label>
                <input type="date" name="last_donation_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">pin_code</label>
                <input type="number" name="pin_code" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Cities</label>
                <select name="city_id" class="form-control" id="">
                    @foreach ($records as $record )
                    <option value="{{$record->id}}">{{$record->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">bloodTypes</label>
                <select name="blood_type_id" class="form-control" id="">
                    @foreach ($bloodTypes as $bloodType )
                    <option value="{{$bloodType->id}}">{{$bloodType->name}}</option>
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

@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
  Create  Donations
 @endsection
 @section("small_title")
 Create  Donations
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> Create  Donations </h3>

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
        <form action="{{url(route("donations.store"))}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">patient_name</label>
                <input type="text" name="patient_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">patient_phone</label>
                <input type="text" name="patient_phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">hospital_name</label>
                <input type="text" name="hospital_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">hospital_address</label>
                <input type="text" name="hospital_address" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">age</label>
                <input type="number" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">bags_number</label>
                <input type="number" name="bags_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">latitude</label>
                <input type="number" name="latitude" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">longitude</label>
                <input type="number" name="longitude" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">details</label>
                <textarea name="details" id="" cols="60" rows="10"></textarea>            
            </div>

            <div class="form-group">
                <label for="name">BloodType</label>
                <select name="blood_type_id" class="form-control" id="">
                    @foreach ($bloodTypes as $bloodType )
                    <option value="{{$bloodType->id}}">{{$bloodType->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Cities</label>
                <select name="city_id" class="form-control" id="">
                    @foreach ($cities as $city )
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Clients</label>
                <select name="client_id" class="form-control" id="">
                    @foreach ($clients as $client )
                    <option value="{{$client->id}}">{{$client->name}}</option>
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

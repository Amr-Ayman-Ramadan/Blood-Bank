@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
 Donations
 @endsection
 @section("small_title")
 list of Donations
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> list of Donations </h3>

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
        <a href="{{url(route("donations.create"))}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Donations</a>
        {{-- @include('flash::message') --}}
       @if (count($records))
       <div class="table-responsive">
        <table class="table table-border">
            <thead>
                 <tr>
                    <th>#</th>
                    <th>patient_name</th>
                    <th>patient_phone</th>
                    <th>hospital_name</th>
                    <th>hospital_address</th>
                    <th>age</th>
                    <th>bags_number</th>
                    <th>details</th>
                    <th>latitude</th>
                    <th>longitude</th>
                    <th>city_id</th>
                    <th>blood_type_id</th>
                    <th>client_id</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($records as $record )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$record->patient_name}}</td>
                    <td>{{$record->patient_phone}}</td>
                    <td>{{$record->hospital_name}}</td>
                    <td>{{$record->hospital_address}}</td>
                    <td>{{$record->age}}</td>
                    <td>{{$record->bags_number}}</td>
                    <td>{{$record->details}}</td>
                    <td>{{$record->latitude}}</td>
                    <td>{{$record->longitude}}</td>
                    <td>{{$record->city_id}}</td>
                    <td>{{$record->blood_type_id}}</td>
                    <td>{{$record->client_id}}</td>
                    <td class="text-center">
                      <a href="{{url(route('donations.edit',$record->id))}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>

                    </td>
                    <td class="text-center">
                      <form action="{{url(route('donations.destroy',$record->id))}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                      </form>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
        </table>
       </div>
           @else
           <div class="alert alert-danger" role="alert">
           No Data
        </div>
       @endif
     </div>
      <!-- /.card-body -->
   
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->

@endsection

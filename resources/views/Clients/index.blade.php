@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
 Clients
 @endsection
 @section("small_title")
 list of Clients
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"> list of Clients </h3>

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
        <a href="{{url(route("clients.create"))}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Client</a>
        {{-- @include('flash::message') --}}
       @if (count($records))
       <div class="table-responsive">
        <table class="table table-border">
            <thead>
                 <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>D_O_B</th>
                    <th>Last_Donation_Date</th>
                    <th>pin_code</th>
                    <th>blood_type_id </th>
                    <th>city_id</th>
                    <th>api_token</th>
                    <th>blood_type</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($records as $record )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->password}}</td>
                    <td>{{$record->phone}}</td>
                    <td>{{$record->d_o_b}}</td>
                    <td>{{$record->last_donation_date}}</td>
                    <td>{{$record->pin_code}}</td>
                    <td>{{$record->blood_type_id}}</td>
                    <td>{{$record->city_id}}</td>
                    <td>{{$record->api_token}}</td>
                    <td>{{$record->blood_type}}</td>
                    <td class="text-center">
                      <a href="{{url(route("clients.edit",$record->id))}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>

                    </td>
                    <td class="text-center">
                      <form action="{{url(route("clients.destroy",$record->id))}}" method="POST">
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

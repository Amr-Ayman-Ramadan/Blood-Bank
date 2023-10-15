@extends('layouts.app')
@inject("client","App\Models\Client")
@inject("Donation","App\Models\DonationRequest")
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
 Dashboard
 @endsection
 @section("small_title")
 Statistics
 @endsection
 
  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-user"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text">Clients</span>
                <span class="info-box-number">
                  {{$client->count()}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         
      </div>
      <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-green elevation-1"><i class="fa fa-chart-line"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Donation Requests</span>
                    <span class="info-box-number">
                    {{$Donation->count()}}
                    </span>
                </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
      </div>
  </div>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

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
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif 
        You are logged in!
     </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->

@endsection

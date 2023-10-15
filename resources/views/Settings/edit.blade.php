@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
 @section("page_title")
   Settings website
 @endsection
 @section("small_title")
 Settings website
  @endsection
 
  <!-- Main content -->
  <section class="content">
  
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">    Settings website  </h3>

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
        <form action="{{url(route('settings.store'))}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">fb_link</label>
                <input type="text" name="fb_link" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">tw_link</label>
                <input type="text" name="tw_link" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">insta_link</label>
                <input type="text" name="insta_link" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">email	</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">notification_settings_text </label>
                <input type="text" name="notification_settings_text" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">about_app </label>
                <textarea name="about_app " id="" cols="80" rows="10"></textarea>            
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

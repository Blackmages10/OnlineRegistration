@extends('layouts.admin.app')
@section('content')
<div class="container m-5">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

             <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Date picker</h3>
                  </div>
                  <div class="card-body">
                    <!-- Date -->
                    <div class="form-group">
                      <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- Date and time -->
                    <div class="form-group">
                      <label>Date and time:</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.form group -->
                    <!-- Date range -->
                    <div class="form-group">
                      <label>Date range:</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservation">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                      <label>Date and time range:</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input type="text" class="form-control float-right" id="reservationtime">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                      <label>Date range button:</label>

                      <div class="input-group">
                        <button type="button" class="btn btn-default float-right" id="daterange-btn">
                          <i class="far fa-calendar-alt"></i> Date range picker
                          <i class="fas fa-caret-down"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.form group -->
                  </div>
                    <div class="card-footer">
                      Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
                      the plugin.
                    </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

         </div>


</div>

  @include('layouts.admin.footer');


@endsection

@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper ">
    <section class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Manage Seminar</h1>
                </div>
                <div class="col-sm-6">

                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>

        <!-- Content Header (Page header) -->
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">List of seminar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#modal-lg">
                    Add seminar
                  </button>
                  <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Add Seminar</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{ route('seminar.store') }}" method="POST">
                            @csrf
                            <div class="modal-body mx-3">
                                <div class="form-group col-md-12 ">

                                    <input type="text" class=" form-control  @error('Topic') is-invalid @enderror" name="Topic" value="{{ old('Topic') }}" id="Topic" placeholder="Topic">
                                    @error('Topic')
                                        <span class="invalid-feedback" role="alert">
                                            <i class=" text-warning">{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 ">

                                    <input type="text" class=" form-control  @error('venue') is-invalid @enderror" name="venue" value="{{ old('venue') }}" id="venue" placeholder="Venue">
                                    @error('venue')
                                        <span class="invalid-feedback" role="alert">
                                            <i class=" text-warning">{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="time_start" class=" text-muted mr-0">Time start:</label>
                                                </div>
                                                <div class="col-8 ">
                                                    <input type="time" id="time_start"  class=" form-control @error('time_start') is-invalid @enderror" name="time_start" value="{{ old('time_start') }}" >
                                                </div>
                                            </div>
                                           @error('time_start')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group col-md-12 ">

                                            <div class="row">
                                                <div class="col-4">
                                                    <label for="time_end" class=" text-muted mr-0">Time End:</label>
                                                </div>
                                                <div class="col-8 ">
                                                    <input type="time" id="time_end"  class=" form-control @error('time_end') is-invalid @enderror" name="time_end" value="{{ old('time_end') }}" >
                                                </div>
                                            </div>
                                             @error('time_end')
                                                <span class="invalid-feedback" role="alert">
                                                    <i class=" text-warning">{{ $message }}</i>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 ">

                                    <input type="date" class=" form-control  @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" id="date" placeholder="Date">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <i class=" text-warning">{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 ">

                                    <input type="text" class=" form-control  @error('speaker') is-invalid @enderror" name="speaker" value="{{ old('speaker') }}" id="speaker" placeholder="Speaker">
                                    @error('speaker')
                                        <span class="invalid-feedback" role="alert">
                                            <i class=" text-warning">{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 ">

                                    <input type="text" class=" form-control  @error('limit') is-invalid @enderror" name="limit" value="{{ old('limit') }}" id="limit" placeholder="Capacity">
                                    @error('limit')
                                        <span class="invalid-feedback" role="alert">
                                            <i class=" text-warning">{{ $message }}</i>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>


                        </form>

                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Topic</th>
                  <th>Venue</th>
                  <th>Time Start</th>
                  <th>Time End</th>
                  <th>Date</th>
                  <th>Speaker</th>
                  <th>Capacity</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($seminars as $seminar )
                        <tr>
                             <td>{{ $seminar->id }}</td>
                             <td>{{ $seminar->Topic }}</td>
                             <td>{{ $seminar->venue }}</td>
                             <td>{{ $seminar->time_start }}</td>
                             <td>{{ $seminar->time_end }}</td>
                             <td>{{ $seminar->date }}</td>
                             <td>{{ $seminar->speaker }}</td>
                             <td>{{ $seminar->limit }}</td>
                             <td></td>

                         </tr>
                    @empty
                         <tr>
                             <td colspan="8" class=" align-content-center">--Empty Table--</td>
                         </tr>

                    @endforelse


                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

    </section>
</div>

@include('layouts.admin.footer');

<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Page specific script -->
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
@endsection

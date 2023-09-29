@extends('admin.all')
@section('title')
Messages
@stop

@section('content')
<div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Id</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Sujet</th>
                  <th>Message</th>
                  
                </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($Messages as $Message)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$Message->name}}</td>
                  <td>{{$Message->email}}</td>
                  <td>{{$Message->subject}}</td>
                  <td>{{$Message->message}}</td>
                </tr>
                
                @endforeach   
              </table>
            </div>
            <!-- /.card-body -->
@endsection

@section('js')
<!-- DataTables -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
   
  });
</script>
@endsection
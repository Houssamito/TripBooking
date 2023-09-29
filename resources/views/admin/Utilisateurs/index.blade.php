@extends('admin.all')
@section('title')
Liste des réservations
@stop

@section('content')
<div class="card">
            <div class="card-header">
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>téléphone</th>
                  <th>Date de création</th>
                </tr>
                </thead>
                <tbody> @php
                  $i = 1;
                @endphp
                @foreach ($User as $User)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$User->name}}</td>
                <td>{{$User->email}}</td>
                <td>06060606006</td>
                <td>{{$User->created_at}}</td>
                
              </tr>
              
              @endforeach
                  

                </tbody>
                
        
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
    /*$('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    }); */
  });
</script>
@endsection
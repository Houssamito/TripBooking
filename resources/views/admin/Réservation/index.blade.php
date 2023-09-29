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
                  <th>IdRéservation</th>
                  <th>Nom du client</th>
                  <th>Id d'activité</th>
                  <th>téléphone</th>
                  <th>Mode de paiment</th>
                  <th>Etat</th>
                  <th>Date</th>
                  <th>Prix</th>
                </tr>
                </thead>
                <tbody> @php
                  $i = 1;
                @endphp
                @foreach ($order as $order)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$order->fullname}}</td>
                <td>{{$order->activity_id}}</td>
                <td>{{$order->phoneNumber}}</td>
                <td>{{$order->payment_mode}}</td>
                <td>{{$order->status_message}}</td>
                <td>{{$order->Date}}</td>
                <td>{{$order->price}}$</td>
                
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
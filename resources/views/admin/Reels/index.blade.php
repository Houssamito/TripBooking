@extends('admin.all')
@section('title')
Catégories
@stop

@section('content')
<div class="card">
            <div class="card-header">
              <a href="{{route('Reels.create')}}" class="btn btn-outline-primary">Ajouter une video</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>titre</th>
                  <th>Video</th>
                  
                </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($Reels as $Reel)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$Reel->titre}}</td>
                  <td> <img src="{{Storage::url($Reel->video)}}" class="img-thumbnail" style="max-width: 50px"></td>
                  
                  <td>
                    
                   
                  </td>
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
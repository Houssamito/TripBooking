@extends('admin.all')
@section('title')
Activités
@stop

@section('content')
<div class="card">
            <div class="card-header">
              <a href="{{route('Activity.create')}}" class="btn btn-outline-primary">Créer</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Titre</th>
                  <th>Sous-titre</th>
                  <th>Catégorie</th>
                  <th>Image</th>
                  <th>Prix</th>
                  <th>Opérations</th>
                </tr>
                </thead>
                <tbody> @php
                  $i = 1;
                @endphp
                @foreach ($Activity as $Activity)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$Activity->titre}}</td>
                <td>{{ $Activity->{'sous-titre'} }}</td>
                <td>{{$Activity->Categorie}}</td>
                <td> <img src="{{Storage::url($Activity->image)}}" class="img-thumbnail" style="max-width: 50px"></td>
                <td>{{$Activity->prix}}</td>
                
      
                <td>
                  <a href="{{route('Activity.show', $Activity->id)}}" class="btn btn-sm btn-outline-success">Afficher</a>
                  <a href="{{route('Activity.edit', $Activity->id)}}" class="btn btn-sm btn-outline-warning">Modifier</a>
                  @include('admin.includes.delete_modal', ['type'=>'Activity','data'=>$Activity, 'route'=>'Activity.destroy'])
                </td>
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
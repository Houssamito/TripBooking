@extends('admin.all')
@section('title')
Catégories
@stop

@section('content')
<div class="card">
            <div class="card-header">
              <a href="{{route('categories.create')}}" class="btn btn-outline-primary">Créer</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Etat</th>
                  <th>Opérations</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($categories as $Category)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$Category->name}}</td>
                  <td>{{$Category->description}}<</td>
                  <td> <img src="{{Storage::url($Category->image)}}" class="img-thumbnail" style="max-width: 50px"></td>
                  <td>
                    @if ($Category->is_showing ==1)
                      <span class="bage-success">showing</span>
                      @else
                      <span class="bage-danger">hidden</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{route('categories.show', $Category->id)}}" class="btn btn-sm btn-outline-success">Afficher</a>
                    <a href="{{route('categories.edit', $Category->id)}}" class="btn btn-sm btn-outline-warning">Modifier</a>
                    @include('admin.includes.delete_modal', ['type'=>'Category','data'=>$Category, 'route'=>'categories.destroy'])
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
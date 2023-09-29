
  
  <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#delete_{{$type}}_{{$data->id}}">
    Supprimer
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="delete_{{$type}}_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{route($route, $data->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <div class="modal-body">
          Vous voulez surement supprimer cette catégorie
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">oui</button>
        </div>
    </form>
      </div>
    </div>
  </div>
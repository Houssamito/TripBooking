@extends('admin.all')
@section('title')
Création d'une nouvelle catégorie
@stop

@section('content')

<div class="card-body">
    <form action="{{route('Reels.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name">Titre du vidéo</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="titre">
                </div>
            </div>

            <div class="col">
                <label for="video">Vidéo</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="video">
            </div>
</div>


    

        </div>
    <button type="submit" class="btn btn-outline-primary">Enregistrer</button>

    </form>

</div>
@endsection
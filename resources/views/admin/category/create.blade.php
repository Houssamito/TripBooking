@extends('admin.all')
@section('title')
Création d'une nouvelle catégorie
@stop

@section('content')

<div class="card-body">
    <form action="{{route('categories.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name">Nom de catégorie</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>

            <div class="col">
                <label for="description">Description</label>
                <div class="input-group mb-3">
                    <textarea name="description" rows="3" cols="3" class="form-control"></textarea>
                </div>
            </div>

        </div>

        <div class="row">

        <div class="col">
                <label for="image">Image</label>
                <div class="input-group mb-3" col>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="col">
                <label for="is_showing">Affichage</label>
                <div class="input-group mb-3">
                    <input type="checkbox" name="is_showing" id="is_showing">
                </div>
            </div>

        </div>
    <button type="submit" class="btn btn-outline-primary">Enregistrer</button>

    </form>

</div>
@endsection
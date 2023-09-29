
@extends('admin.all')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@stop
@section('title')
Création d'une nouvelle Activité
@stop

@section('content')
@if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif
  <div class="card-body">
    <form action="{{route('Activity.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name">Titre de l'activité</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="titre">
                </div>
            </div>
            <div class="col">
                <label for="name">Sous-titre</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="soustitre">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="description">description</label>
                <div class="input-group mb-3">
                    <textarea name="description" rows="3" cols="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="col">
                <label for="categorie">Catégorie</label>
                <select class="form-control" name="Catégorie">
            @foreach($categories as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
            @endforeach
        </select>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <label for="name">Prix en Dirhams</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="prix">
                </div>
            </div>
            <div class="col">
                <label for="name">Nombre de places</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="places">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="name">Date</label>
                <div class="input-group mb-3">
                    <input type="date" class="form-control" name="date">
                </div>
            </div>
            <div class="col">
                <label for="duration">Durée</label>
                <div class="input-group mb-3">
                    <input type="time" class="form-control" name="duration" step="60">
                </div>
            </div>
        </div>

        <div class="row">

        <div class="col">
                <label for="responsable">Responsable d'activité</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="responsable">
                </div>
            </div>
            <div class="col">
                <label for="is_showing">Affichage</label>
                <div class="input-group mb-3">
                    <input type="checkbox" name="is_showing" id="is_showing">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="col">
                <label for="responsable">Activité 1</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="act1">
                </div>
            </div>
            <div class="col">
                <label for="responsable">Activité 2</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="act2">
                </div>
            </div>
            <div class="col">
                <label for="responsable">Activité 3</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="act3">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col">
            <label>Inclus</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Inclus[]" value="attribut1">
                <label class="form-check-label">Petit déjeuner</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Inclus[]" value="attribut2">
                <label class="form-check-label">Accessible aux personnes en fauteuil roulant</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Inclus[]" value="attribut3">
                <label class="form-check-label">Frais d'assurance</label>
            </div>
            <!-- Ajoutez d'autres cases à cocher selon vos besoins -->
        </div>

        <div class="col">
            <label for="image">Images</label>
            <div class="input-group mb-3" col>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="input-group mb-3" col>
                <input type="file" class="form-control" name="image2">
            </div>
            <div class="input-group mb-3" col>
                <input type="file" class="form-control" name="image3">
            </div>
        </div>
        </div>
    <button type="submit" class="btn btn-outline-primary">Enregistrer</button>

    </form>

</div>
@endsection
@extends('admin.all')
@section('title')
Visualisation de l'activité
@stop

@section('content')

<div class="card-body">
    <form action="{{route('Activity.update', $Activity->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col">
                <label for="name">Titre de l'activité</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="titre" value="{{$Activity->titre}}" readonly>
                </div>
            </div>
            <div class="col">
                <label for="name">Sous-titre</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="soustitre" value="{{$Activity->{'sous-titre'} }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="description">description</label>
                <div class="input-group mb-3">
                    <textarea name="description" rows="3" cols="3" class="form-control" readonly>{{$Activity->description}}</textarea>
                </div>
            </div>
            <div class="col">
                <label for="name">Catégorie</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="Catégorie" value="{{$Activity->Categorie}}" readonly>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <label for="name">Prix en Dirhams</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="prix" value="{{$Activity->prix}}" readonly>
                </div>
            </div>
            <div class="col">
                <label for="name">Nombre de places</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="places" value="{{$Activity->Nombre_places}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="name">Date</label>
                <div class="input-group mb-3">
                    <input type="date" class="form-control" name="date" value="{{$Activity->Date}}" readonly>
                </div>
            </div>
            <div class="col">
                <label for="duration">Durée</label>
                <div class="input-group mb-3">
                    <input type="time" class="form-control" name="duration" step="60" value="{{$Activity->Duree}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">

        <div class="col">
                <label for="responsable">Responsable d'activité</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="responsable" value="{{$Activity->ResponsableAct}}" readonly>
                </div>
            </div>
            <div class="col">
                <label for="is_showing">Affichage</label>
                <div class="input-group mb-3">
                    <input type="checkbox" name="is_showing" id="is_showing" {{($Activity->is_showing ==1) ? 'checked' : ''}} @readonly(true)>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="col">
                <label for="responsable">Activité 1</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="act1" value="{{$Activity->Activite1}}" readonly>
                </div>
            </div>
            <div class="col">
                <label for="responsable">Activité 2</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="act2" value="{{$Activity->Activite2}}" readonly>
                </div>
            </div>
            <div class="col">
                <label for="responsable">Activité 3</label>
                <div class="input-group mb-3" col>
                    <input type="text" class="form-control" name="act3" value="{{$Activity->Activite3}}" readonly>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col">
            <label>Inclus</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Inclus[]" value="attribut1" @readonly(true)>
                <label class="form-check-label">Petit déjeuner</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Inclus[]" value="attribut2" @readonly(true)>
                <label class="form-check-label">Accessible aux personnes en fauteuil roulant</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="Inclus[]" value="attribut3" @readonly(true)>
                <label class="form-check-label">Frais d'assurance</label>
            </div>
            <!-- Ajoutez d'autres cases à cocher selon vos besoins -->
        </div>

        <div class="col">
            <label for="image">Image</label>
            <div class="input-group mb-3" col>
                <img src="{{Storage::url($Activity->image)}}" class="img-thumbnail" style="max-width: 100px">
                <input type="file" class="form-control" name="image">
            </div>
        </div>
        </div>
    </form>

</div>
@endsection
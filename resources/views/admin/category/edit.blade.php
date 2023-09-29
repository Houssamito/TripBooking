@extends('admin.all')
@section('title')
Modification du catégorie
@stop

@section('content')

<div class="card-body">
    <form action="{{route('categories.update', $category->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col">
                <label for="name">Nom de catégorie</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>
            </div>

            <div class="col">
                <label for="description">Description</label>
                <div class="input-group mb-3">
                    <textarea name="description" rows="3" cols="3" class="form-control">{{$category->description}}</textarea>
                </div>
            </div>

        </div>

        <div class="row">

        <div class="col">
                <label for="image">Image</label>
                <div class="input-group mb-3" col>
                    <img src="{{Storage::url($category->image)}}" class="img-thumbnail" style="max-width: 100px">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="col">
                <label for="is_showing">Affichage</label>
                <div class="input-group mb-3">
                    <input type="checkbox" name="is_showing" id="is_showing" {{($category->is_showing ==1) ? 'checked' : ''}}>
                </div>
            </div>

        </div>
    <button type="submit" class="btn btn-outline-primary">Enregistrer</button>

    </form>

</div>
@endsection
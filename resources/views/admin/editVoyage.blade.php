@extends('base')

@section('title', 'Admin | Edit Voyage')


@section('content')

  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>Voyage Edit</h2>
              <p>Admin . Voyage Edit</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="{{ route('admin.voyage.update', $voyage->id) }}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group">
              <label for="title" class="form-label">Titre</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$voyage->title}}">
            </div>
            <div class="form-group">
              <label for="country" class="form-label">Pays</label>
              <input type="text" class="form-control" id="country" name="country" value="{{$voyage->country}}">
            </div>
            <div class="form-group">
              <label for="city" class="form-label">Ville</label>
              <input type="text" class="form-control" id="city" name="city" value="{{$voyage->city}}">
            </div>
            <div class="form-group">
              <label for="description" class="form-label">Decription</label>
              <textarea class="form-control" id="description" name="description">{{$voyage->description}}</textarea>
            </div>
            <div class="form-group">
              <label for="picture" class="form-label">Lien Image</label>
              <input type="text" class="form-control" id="picture" name="picture" value="{{$voyage->picture}}">
            </div>
            <div class="form-group">
              <label for="active" class="form-label">Active</label>
              <select class="form-control" id="active" name="active">
                <option value="0">Non</option>
                <option value="1" selected="selected">Oui</option>
              </select>
            </div>
            <div class="form-group">
              <label for="topPlace" class="form-label">Top Place</label>
              <input type="number" class="form-control" id="topPlace" name="topPlace" value="{{$voyage->topPlace}}">
            </div>
            <div class="form-group">
              <a type="button" class="btn_1 btn-primary mr-4" href="{{ route('admin.voyages')}}">Retour</a>
              <button type="submit" class="btn_1">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection;

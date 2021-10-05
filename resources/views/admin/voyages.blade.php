@extends('base')

@section('title', 'Admin | Voyages')


@section('content')

  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>Gestion des Voyages</h2>
              <p>Admin . Voyages</p>
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
          <a href="{{ route('admin.voyage.create') }}" class="btn_1">Ajouter un voyage</a>
        </div>
      </div>
      <div class="row mt-3">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Titre</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($voyages as $voyage)
              <tr>
                <td>{{ $voyage->id }}</td>
                <td>{{ $voyage->title }}</td>
                <td><a href="{{ route('voyage', $voyage->id)}}">Voir</a></td>
                <td><a href="{{ route('admin.voyage.edit', $voyage->id)}}">Edit</a></td>
                <td><a href="javascript:document.forms.form{{$voyage->id}}.submit();">Supprimer</a></td>
              </tr>

              <form name="form{{$voyage->id}}" action="{{route('admin.voyage.destroy', $voyage->id)}}"  method="post">
                @csrf
                @method("DELETE")
              </form>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>

@endsection;

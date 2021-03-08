@extends('template.main')
@section('content')
<section class="container">
    <h1>Ajouter une couleur: </h1>
    
    <form action="/colors" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Couleur: </label>
            <input type="color" name="color">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</section>
<section class="container">
    <h1>
        Ajouter une voiture
    </h1>
    <form action="/voitures" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Marque : </label>
            <input type="text" name="marque">
        </div>
        <div class="form-group">
            <label for="">Année de construction : </label>
            <input type="text" name="construction">
        </div>
        <select name="genre_id" id="">
            @foreach ($DBColor as $item)
                <option value="{{$item->id}}">{{$item->color}}</option>
            @endforeach
        </select>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</section>
<section class="container">
    <h1>Nos voitures: </h1>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Marque</th>
            <th scope="col">Annee de construction</th>
            <th scope="col">Couleur</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($DBVoiture as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->marque}}</td>
                    <td>{{$item->construction}}</td>
                    <td>{{$item->colors->color}}</td>
                </tr>
            @endforeach

        </tbody>
      </table>
</section>
    
@endsection
@extends('layouts.header-facture')
@section('title', 'Classement')

@section('content')

<h1 class="text-center">Classement</h1><br><br>

<div class="table100 ver1 m-b-110">
  <div class="table100-head">
    <table>
      <thead>
        <tr class="row100 head">
          <th class="cell100 column1">Photo</th>
          <th class="cell100 column2">Prénoms</th>
          <th class="cell100 column3">Nom</th>
          <th class="cell100 column4">Nombre de votes</th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="table100-body js-pscroll">
    <table>
      <tbody>
        @foreach($misses as $miss)
        <tr class="row100 body">
          <td class="cell100 column1"><img src="/img/photos/{{$miss->image}}" width="50" alt=""></td>
          <td class="cell100 column2">{{$miss->prenoms}}</td>
          <td class="cell100 column3">{{$miss->nom}}</td>
          <td class="cell100 column4"><strong>{{$miss->nombre_de_votes}} vote(s)</strong></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection

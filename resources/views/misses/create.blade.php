@extends('layouts.menu-login')
@section('title', 'Créer un produit')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('misses.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Ajouter une candidate
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100">
          <input class="input100" type="text" name="nom" placeholder="Exemple : Johansson">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" type="text" name="prenoms" placeholder="Exemple : Scarlette">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" type="text" name="taille" placeholder="Exemple : 170">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <select name="nationalite" class="form-control" style="">
            <option value="">Côte d'Ivoire</option>
            <option value="">Sénégal</option>
          </select>
          <span class="focus-input100"></span>

        </div>

        <div class="wrap-input100">
          <input class="input100" type="text" name="age" placeholder="Exemple : 21">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" type="text" name="profession" placeholder="Exemple : Etudiante">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input style="padding: 10px 10px 2px 68px;" class="input100" type="file" name="image">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-image" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Ajouter la candidate
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="/">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection

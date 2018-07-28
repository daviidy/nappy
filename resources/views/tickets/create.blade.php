@extends('layouts.menu-login')
@section('title', 'Achetez un ticket')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{ route('tickets.store') }}" class="login100-form validate-form">
        <span class="login100-form-title">
          Achetez un ticket
        </span>
        {{ csrf_field() }}

        <div class="wrap-input100">
          <input class="input100" type="email" name="email" placeholder="Exemple : test@example.com">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>
        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Achetez le ticket
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

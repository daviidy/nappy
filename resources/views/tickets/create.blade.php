@extends('layouts.menu-login')
@section('title', 'Achetez un ticket')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="https://secure.cinetpay.com/" class="login100-form validate-form">
        <span class="login100-form-title">
          Le ticket coûte 6.000 FCFA
        </span>
        {{ csrf_field() }}

        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_id">
            <option value="{{$temps}}">trans id</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_amount">
            <option value="6000">montant</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_currency">
            <option value="CFA">currency</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_site_id">
            <option value="113043">Id site</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_language">
            <option value="fr">language</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_version">
            <option value="V1">version</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_payment_config">
            <option value="SINGLE">payment config</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_page_action">
            <option value="PAYMENT">page action</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_date">
            <option value="{{$time}}">trans date</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="apikey">
            <option value="134714631658c289ed716950.86091611">api key</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="signature">
            <option value="{{$signature}}">Signature</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_designation">
            <option value="Vote">Désignation</option>
          </select>
        </div>
        @if(Session::has('name') && Session::has('email'))
      <!--  @php
        $requests = array("name" => Session::get('name'),
                          "email" => Session::get('email')
                          );
        @endphp
        {{var_dump($requests)}}-->
        <div style="display: none;" class="form-group">
          <select class="" name="return_url">
            <option value="{{url('achat')}}">url retour</option>
          </select>
        </div>
        @endif
        <div style="display: none;" class="form-group">
          <select class="" name="cancel_url">
            <option value="https://minaci.oschool.ci">url cancel</option>
          </select>
        </div>

      <!--  <div class="wrap-input100">
          <input class="input100" type="text" name="name" placeholder="Prénom">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" type="email" name="email" placeholder="Email">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-ticket" aria-hidden="true"></i>
          </span>
        </div> -->
        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Confirmer l'achat du ticket
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

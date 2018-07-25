@extends('layouts.menu-merci')
@section('title', 'Voter pour $miss->prenoms $miss->nom')
@section('content')

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1>{{$miss->prenoms}} {{$miss->nom}}</h1>

            @if (session('status'))
              <p class="lead">Merci pour votre vote !</p>
            @else
            <p class="lead">Voter pour {{$miss->prenoms}} {{$miss->nom}}</p>
            @endif
            <ul class="social-icon">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="profile-img" style="background-image: url(/img/photos/{{$miss->image}})"></div>
    </header>
    <!-- .header-->
</div>


<div class="right-col-block blocks">
<section class="intro section-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                  @if (session('status'))
                    <h1>Merci pour votre vote</h1>
                  @else
                  <h1>Voter pour {{$miss->prenoms}} {{$miss->nom}}</h1>
                  @endif
                </div>
            </div>
            <div class="col-md-6">
              <form method="post" enctype="multipart/form-data" action="https://secure.cinetpay.com/">
                {{ csrf_field() }}
                <div style="display: none;" class="form-group">
                  <select class="" name="cpm_trans_id">
                    <option value="{{\Carbon\Carbon::now()}}">trans id</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="cpm_amount">
                    <option value="100">montant</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="cpm_currency">
                    <option value="CFA">currency</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="cpm_site_id">
                    <option value="535040">Id site</option>
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
                    <option value="{{\Carbon\Carbon::now()}}">trans date</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="apikey">
                    <option value="134714631658c289ed716950.86091611">api key</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="signature">
                    <option value="{{ $time }}">Signature</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="cpm_designation">
                    <option value="Vote">Désignation</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="miss_id">
                    <option value="{{$miss->id}}">Id miss</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="nombre_de_votes">
                    <option value="1"></option>
                  </select>
                </div>
                @if (session('status'))
                <button type="submit" class="btn btn-primary">Voter encore</button>
                @else
                <button type="submit" class="btn btn-primary">Voter</button>
                @endif
              </form>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn" name="button"><a href="/">Revenir à la page d'accueil</a></button>
            </div>
        </div>
    </div>
</section>


@endsection

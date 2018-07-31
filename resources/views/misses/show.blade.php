@extends('layouts.menu-merci')
@section('title', 'Voter pour $miss->prenoms $miss->nom')
@section('content')

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1>{{$miss->prenoms}} {{$miss->nom}}</h1><br>
            <h1>{{$miss->votes->count()}} vote(s)</h1>

            @if ($status == 1)
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
                  @if ($status == 1)
                    <h1>Merci pour votre vote</h1>
                  @else
                  <h1>Voter pour {{$miss->prenoms}} {{$miss->nom}}</h1>
                  @endif
                </div>
            </div>
            <div class="col-md-6">
              <!--https://secure.cinetpay.com/-->
              <form method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div style="display: none;" class="form-group">
                  <select class="" name="cpm_trans_id">
                    <option value="{{$temps}}">trans id</option>
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
                <div style="display: none;" class="form-group">
                  <select class="" name="return_url">
                    <option value="{{url('voting', $miss)}}">url retour</option>
                  </select>
                </div>
                <div style="display: none;" class="form-group">
                  <select class="" name="cancel_url">
                    <option value="https://minaci.oschool.ci">url cancel</option>
                  </select>
                </div>
                @if ($status == 1)
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

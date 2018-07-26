@extends('layouts.menu')

@section('content')

<section class="slider">
  <div class="container-fluid">

    <div class="row">

      <div class="col-sm-12">

        <div class="texte-slider">
          <div style="margin-bottom: 5px;" class="">
            <h1 style="color: #fff;" >Bienvenue au MINACI 2018</h1>
          </div>
          <div class="">
            <h2 style="color: #fff;" >L'éloge de la beauté Africaine au naturel</h2>
          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<!--Candidates-->
<section id="courses" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2 style="color: #a01eb4;">Nos candidates</h2>
        <p>Votez pour la candidate de votre choix. <strong><i>Le vote coûte 100 FCFA.</i></strong></p>
        <hr class="bottom-line">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach($misses as $miss)
      <div class="col-md-4 col-sm-6 padleft-right">
        <figure class="imghvr-fold-up">
          <img src="/img/photos/{{$miss->image}}" class="img-responsive">
          <figcaption>
            <h3>{{$miss->prenoms}} {{$miss->nom}}</h3>
            <h5>{{$miss->votes->count()}} vote(s)</h5><br>
            <form method="post" enctype="multipart/form-data" action="https://secure.cinetpay.com/">
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
              <div style="display: none;" class="form-group">
                <select class="" name="return_url">
                  <option value="{{url('misses', $miss)}}">Désignation</option>
                </select>
              </div>
              <div style="display: none;" class="form-group">
                <select class="" name="cancel_url">
                  <option value="https://minaci.oschool.ci">Désignation</option>
                </select>
              </div>
              @if (session('vote'))
              <button type="submit" class="btn btn-primary">Voter encore</button>
              @else
              <button type="submit" class="btn btn-primary">Voter</button>
              @endif
            </form>
          </figcaption>
        </figure>
      </div>
      @endforeach
    </div>
  </div>
</section>




@endsection

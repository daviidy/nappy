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
            <p style="color: #fff;">Cliquez pour voter</p>
          </figcaption>
          <a href="{{url('misses', $miss)}}"></a>
        </figure>
      </div>
      @endforeach
    </div>
  </div>
</section>




@endsection

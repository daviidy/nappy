@extends('layouts.menu-merci')
@section('title', 'Voter pour $miss->prenoms $miss->nom')
@section('content')

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1>{{$miss->prenoms}} {{$miss->nom}}</h1>
            <p class="lead">Voter pour {{$miss->prenoms}} {{$miss->nom}}</p>
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
                  <h1>Voter pour {{$miss->prenoms}} {{$miss->nom}}</h1>
                </div>
            </div>
            <div class="col-md-6">
              <form method="post" enctype="multipart/form-data" action="{{url('voting', $miss)}}">
                {{ csrf_field() }}
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
                <button type="submit" class="btn btn-primary">Voter</button>
              </form>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn" name="button"><a href="/">Revenir à la page d'accueil</a></button>
            </div>
        </div>
    </div>
</section>


@endsection

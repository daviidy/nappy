@extends('layouts.menu-merci')
@section('content')

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1>Minaci 2018</h1>

            <p class="lead">La beauté naturelle Africaine</p>
            <ul class="social-icon">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="profile-img" style=""></div>
    </header>
    <!-- .header-->
</div>


<div class="right-col-block blocks">
<section class="intro section-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h1>Merci !</h1>
                    <p>Le ticket a été envoyé dans votre boîte mail</p>
                </div>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary" name="button">Votez encore</button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn" name="button">Revenir à la page d'accueil</button>
            </div>
        </div>
    </div>
</section>


@endsection

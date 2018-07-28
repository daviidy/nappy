<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/mentor/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/mentor/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/mentor/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="/mentor/css/style.css">
    <link rel="stylesheet" href="/edu/style2.css">

    <title>Minaci 2018</title>
  </head>
  <body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="alert alert-info text-center alert-dismissible" style="margin-bottom: 0px;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Info !</strong> <a href="{{ route('tickets.create') }}">Achetez vos tickets en ligne</a> , et bénéficiez d'une réduction de 40%
</div>
<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Remplissez ce formulaire pour acheter un ticket</h4>
</div>
<div class="modal-body">
  <form enctype="multipart/form-data" action="{{ route('tickets.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Adresse Email:</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
</div>
</div>

</div>
</div> <!--fin modal -->


    <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="/edu/nappy.jpeg" alt="" height="50">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="margin-top: 5px;">
        <li class="nav-item">
          <a class="nav-link" href="/classement"><span class="fa fa-list"></span> Voir le classement</a>
        </li>
        <!--<li class="nav-item">
        <div id="custom-search-input">
          <form class="form-inline" action="#" method="POST">
           <div class="input-group col-md-12">
               <input type="text" name="q" class="  search-query form-control" placeholder="Chercher une candidate" />
               <span class="input-group-btn">
                   <button type="submit" class="btn btn-danger" type="button">
                       <span class=" fa fa-search"></span>
                   </button>
               </span>
           </div>
         </form>
       </div>
     </li> -->
      </ul>
    </div>
  </div>
</nav>


    @yield('content')

  </body>
</html>

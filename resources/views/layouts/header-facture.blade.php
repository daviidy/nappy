<!DOCTYPE html>
<html lang="en">
<head>
	<title>Minaci 2018 | @yield('title')</title> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="facture/images/icons/image-profil.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="facture/css/util.css">
	<link rel="stylesheet" type="text/css" href="facture/css/main.css">

	<link rel="stylesheet" href="/edu/style2.css">
<!--===============================================================================================-->
</head>
<body>





  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">

  @yield('content')

</div>
</div>
</div>


<!--===============================================================================================-->
<script src="facture/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="facture/vendor/bootstrap/js/popper.js"></script>
<script src="facture/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="facture/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="facture/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
$('.js-pscroll').each(function(){
var ps = new PerfectScrollbar(this);

$(window).on('resize', function(){
  ps.update();
})
});


</script>
<!--===============================================================================================-->
<script src="facture/js/main.js"></script>

</body>
</html>

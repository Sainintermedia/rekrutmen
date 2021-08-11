<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Rekrutmen DesaSB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="assets/frontend/css/bootstrap.min.css" rel="stylesheet" />
<link rel="assets/frontend/stylesheet" href="simple-line-icons/css/simple-line-icons.css">
<link href="assets/frontend/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="assets/frontend/css/flexslider.css" rel="stylesheet" />
<link href="assets/frontend/js/owl-carousel/owl.carousel.css" rel="stylesheet"> 
<link href="assets/frontend/css/style.css" rel="stylesheet" /> 
     <!-- Favicon -->
	 <link rel="icon" href="{{'assets/frontend/img/recrutment.ico'}}">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
	<!-- start header -->
	@include('frontend.header')
	<!-- end header -->
	<section id="banner">

	<!-- Slider -->
	@include('frontend.slider')
	<!-- end slider -->
 
	</section>

    <!-- Jumbo Box -->
	<section class="jumbobox">
	@include('frontend.jumbobox')
	</section>
	<!-- end Jumbo Box -->
	
	<section id="content">
    @include('frontend.services')
	</section> 
		 
	
	<section class="aboutUs">
	@include('frontend.about')
	</section> 
	 <section class="clients">
    @include('frontend.client')
	 </section>
	<footer>
	@include('frontend.footer')
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/frontend/js/jquery.js"></script>
<script src="assets/frontend/js/jquery.easing.1.3.js"></script>
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/jquery.fancybox.pack.js"></script>
<script src="assets/frontend/js/jquery.fancybox-media.js"></script> 
<script src="assets/frontend/js/portfolio/jquery.quicksand.js"></script>
<script src="assets/frontend/js/portfolio/setting.js"></script>
<script src="assets/frontend/js/jquery.flexslider.js"></script>
<script src="assets/frontend/js/animate.js"></script>
<script src="assets/frontend/js/custom.js"></script>
<script src="assets/frontend/js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
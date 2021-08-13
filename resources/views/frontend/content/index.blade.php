<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Rekrutmen DesaSB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link rel="apple-touch-icon" href="{{'assets/frontend/img/recrutment.ico'}}">
<link rel="shortcut icon" href="{{'assets/frontend/img/recrutment.ico'}}">

<link href="assets/frontend/css/bootstrap.min.css" rel="stylesheet" />
<link rel="assets/frontend/stylesheet" href="simple-line-icons/css/simple-line-icons.css">
<link href="assets/frontend/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="assets/frontend/css/flexslider.css" rel="stylesheet" />
<link href="assets/frontend/css/jquery.dataTables.css" rel="stylesheet" />
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
    @yield('content')
	<!-- star footer -->
	<footer>
	@include('frontend.footer')
	</footer>
    	<!-- end footer -->
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
<script src="assets/frontend/js/jquery.dataTables.js"></script>
<script>
	/** TO DISABLE SCREEN CAPTURE **/
document.addEventListener('keyup', (e) => {
    if (e.key == 'PrintScreen') {
        navigator.clipboard.writeText('');
        alert('Screenshots disabled!');
    }
});

/** TO DISABLE PRINTS WHIT CTRL+P **/
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 'p') {
        alert('This section is not allowed to print or export to PDF');
        e.cancelBubble = true;
        e.preventDefault();
        e.stopImmediatePropagation();
    }
});

/* TO DO: There are combinations that remain to be solved 
    --> Windows+Shift+S
*/
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
{{-- <script language='JavaScript1.2'><font></font>
	function disableselect(e){<font></font>
	return false<font></font>
	}<font></font>
	function reEnable(){<font></font>
	return true<font></font>
	}<font></font>
	document.onselectstart=new Function (&quot;return false&quot;)<font></font>
	if (window.sidebar){<font></font>
	document.onmousedown=disableselect<font></font>
	document.onclick=reEnable<font></font>
	}<font></font>
	</script> --}}
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<!-- Gambar tab browser -->
		<link rel='shortcut icon' href="img/favicon.ico" type='image/x-icon'/>
		
		<!-- Judul tab browser -->
		<title>Home - KBBI</title>
		
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        <link href="css/bootstrap-theme.css" rel="stylesheet">
         
        <!-- Style CSS -->
        <link href="css/style.css" rel="stylesheet">
		
		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Comfortaa|Quicksand" rel="stylesheet">
    </head>
		<?php
			require('./header.php');
		?>	
    <body>
        <div class="container">
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/web/homepage1.png" alt="gambar1" height="100%">
					</div>
					<div class="item">
						<img src="img/web/homepage2.png" alt="gambar2">
					</div>
					<div class="item">
						<img src="img/web/homepage3.png" alt="gambar3">
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>     
        </div>
		
		<!-- JS -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/carousel.js"></script>
    </body>
</html>
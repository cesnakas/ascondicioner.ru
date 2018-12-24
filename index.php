<?
require($_SERVER['DOCUMENT_ROOT'].'/local/templates/main/header.php');
?>

	<header id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		
		<div class="carousel-inner">
			<div class="carousel-item active">
				<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="80vh" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
					<!--<title>Placeholder</title>-->
					<rect fill="#777" width="100%" height="100%"></rect>
					<text class="display-1" fill="#555" dy=".3em" x="50%" y="50%">First slide</text>
				</svg>
				<!--<img src="..." class="d-block w-100" alt="...">-->
			</div>
			<div class="carousel-item">
				<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="80vh" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
					<!--<title>Placeholder</title>-->
					<rect fill="#888" width="100%" height="100%"></rect>
					<text class="display-1" fill="#555" dy=".3em" x="50%" y="50%">Second slide</text>
				</svg>
				<!--<img src="..." class="d-block w-100" alt="...">-->
			</div>
			<div class="carousel-item">
				<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="80vh" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide">
					<!--<title>Placeholder</title>-->
					<rect fill="#999" width="100%" height="100%"></rect>
					<text class="display-1" fill="#555" dy=".3em" x="50%" y="50%">Third slide</text>
				</svg>
				<!--<img src="..." class="d-block w-100" alt="...">-->
			</div>
		</div>
		
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		
	</header>

	<section style="height:60vh;">
		<div class="container">
			<h3 class="display-1 text-center">About</h3>
		</div>
	</section>

	<section style="height:60vh;">
		<div class="container">
			<h3 class="display-1 text-center">Services</h3>
		</div>
	</section>

	<section style="height:60vh;">
		<div class="container">
			<h3 class="display-1 text-center">Gallery</h3>
		</div>
	</section>

	<section style="height:60vh;">
		<div class="container">
			<h3 class="display-1 text-center">Contact</h3>
		</div>
	</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/local/templates/main/footer.php');
?>
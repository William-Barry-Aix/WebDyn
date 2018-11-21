<?php
include 'View.php';
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
<title>Movie Presentation</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="./public/style.css" />
</head>
<body>
	<header>
		<?php getBlock('header');?>
	</header>
	<main>
	<section>
		
		

		<article class="actors_infos">
			<h2>Actors Infos</h2>
				<h3>Sally Hawkins</h3>
				<p>Actrice britannique née le 27 avril 1976 à Dulwich.</p>

				<h3>Michael Shannon</h3>
				<p></p>

				<h3>Richard Jenkins</h3>
				<p></p>

				<h3>Doug Jones</h3>
				<p></p>

				<h3>Michael Stuhlbarg</h3>
				<p></p>	
		</article>
		
		<aside class="images">
			<h2>Images</h2>
			<figure>
				<img src="./public/img/movie1.jpg" alt="movie_photo_1" />
			</figure>
			<figure>
				<img src="./public/img/movie2.jpg" alt="" />
			</figure>
		</aside>
		</article>
	</section>
	<footer>
		<h5>Barry William</h5>
	</footer>
	</main>
</body>
</html>
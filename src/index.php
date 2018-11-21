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
		
		
		<article class="content">
			<article class="real_infos">
			<p>Film de <a href="./director.html">Guillermo del Toro</a></p>					
		</article>
		<article class="synopsis">
			<h2>Synopsis</h2>
			<p>Modeste employée d’un laboratoire gouvernemental ultrasecret, Elisa mène une existence solitaire, d’autant plus isolée qu’elle est muette. Sa vie bascule à jamais lorsqu’elle et sa collègue Zelda découvrent une expérience encore plus secrète que les autres…</p>
		</article>
		<article class="main_actors">
			<h2>Acteurs Principaux</h2>
			<figure>
				<img src="./public/img/actor1.jpg" alt="Sally Hawkins" />
				<figcaption>
					<h3>Sally Hawkins</h3>
				</figcaption>
			</figure>
			<figure>
				<img src="./public/img/actor2.png" alt="Michael Shannon" />
				<figcaption>
					<h3>Michael Shannon</h3>
				</figcaption>
			</figure>
			
		</article>

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
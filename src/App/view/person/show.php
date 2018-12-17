<!DOCTYPE html>
<html lang = "fr">
<head>
<title>Movie Presentation</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/public/style.css" />
</head>
<body>
	<header>
		<?php $this->getBlock('header', ['movie' => $this->movie,
										 'poster' => $this->poster[0],
										 'gallery' => $this->gallery]);?>
	</header>
	<main>
		<section>
			<article class="content">
				<?php $this->getBlock('infos', ['movie' => $this->movie,
												'director' => $this->director,
												'actors' => $this->actors]);?>
				<?php $this->getBlock('personsInfos', ['actors' => $this->actors]); ?>
				<?php $this->getBlock('images', ['gallery' => $this->gallery]);?>
			</article>
		</section>	
		<footer>
			<?php $this->getBlock('footer');?>
		</footer>
	</main>
</body>
</html>
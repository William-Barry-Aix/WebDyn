<!DOCTYPE html>
<html lang = "fr">
<head>
<title>Movie Presentation</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="./public/style.css" />
</head>
<body>
	<header>
		<?php $this->getBlock('header');?>
	</header>
	<main>
		<section>
			<article class="content">
				<?php $this->getBlock('infos');?>
				<?php $this->getBlock('personsInfos'); ?>
				<?php $this->getBlock('images');?>
			</article>
		</section>	
		<footer>
			<?php $this->getBlock('footer');?>
		</footer>
	</main>
</body>
</html>
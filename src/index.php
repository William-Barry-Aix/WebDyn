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
				<?php getBlock('infos');?>
				<?php getBlock('personsInfos'); ?>
				<?php getBlock('images');?>
			</article>
		</section>
	
		<footer>
			<?php getBlock('footer');?>
		</footer>
	</main>
</body>
</html>
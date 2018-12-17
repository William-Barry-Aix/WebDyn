<article class="actors_infos">
	<h2>Actors Infos</h2>
	<?php foreach ($data['actors'] as $id => $actor): ?>
	<h3><?= $actor['firstname'], $actor['lastname'] ?></h3>
	<p><?= $actor['biography'] ?></p>
	<?php endforeach; ?>
	</article>
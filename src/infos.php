
	<article class="real_infos">
	<p>Film de <a href="./director.html"><?= $data['director']['firstname'] , " ", 
											 $data['director']['lastname']?></a></p>					
	</article>
<article class="synopsis">
	<h2>Synopsis</h2>
	<p><?= $data['movie']['synopsis'] ?></p>
</article>
<article class="main_actors">
	<h2>Acteurs Principaux</h2>
	<?php $nbMainActors = 0; ?>
	<?php foreach($data['actors'] as $id => $actor): ?>
	<?php if($nbMainActors >= 5) continue ?>
	<figure>
		<img src="<?= $this->getImage($actor['pictures'][0]['path']) ?>" alt="<?= $actor['firstname'], $actor['lastname'] ?>" />
		<figcaption>
			<h3><?= $actor['firstname'], $actor['lastname'] ?>s</h3>
		</figcaption>
	</figure>
	<?php $nbMainActors++ ?>
	<?php endforeach; ?>	
			
</article>
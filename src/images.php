<aside class="images">
	<h2>Images</h2>
	<?php foreach ($data['gallery'] as $id => $picture): ?>
	<?php if(strpos($picture['path'], 'small')):?>
	<figure>
		<img src="<?= $this->getImage($picture['path']) ?>" alt="<?= $picture['legend'] ?>" />
	</figure>
	<?php endif; ?>
	<?php endforeach; ?>
	
</aside>
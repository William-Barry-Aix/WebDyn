<?php
if (array_key_exists('movie', $data)):
/* --------- Movie part --------- */

$headerPic = array();
foreach ($data['gallery'] as $key => $picture) {
	if (strpos($picture['path'], 'big'))
		$headerPic[] = $picture;
}
shuffle($headerPic);
?>

<article class="description" style="background-image: url(<?= $this->getImage($headerPic[0]['path']) ?>)">
	<figure class="headImage">
		<img class="headImage" src="<?= $this->getImage($data['poster']['path'])?>" alt="<?= $data['movie']['title'] ?>" />
	</figure>
	<div class="article_description">
		<h1><?= $data['movie']['title'] ?></h1>
		<time datetime="<?= $data['movie']['releaseDate'] ?>"><?= $data['movie']['releaseDate'] ?></time>
		<h2><?= $data['movie']['rating'] ?></h2>
		<meter min="0" max="10" value="<?= $data['movie']['rating'] ?>"/>
	</div>
</article>

<?php
elseif (array_key_exists('person', $data)):
/* --------- Person part --------- */
?>

<article class="description" style="background-image: url(<?= $this->getImage($headerPic[0]['path']) ?>)">
	<figure class="headImage">
		<img class="headImage" src="<?= $this->getImage($data['poster']['path'])?>" alt="<?= $data['person']['firstname'] . $data['person']['lastname'] ?>" />
	</figure>
	<div class="article_description">
		<h1><?= $data['person']['firstname'] . $data['person']['lastname'] ?></h1>
		<time datetime="<?= $data['person']['birthdate'] ?>"><?= $data['person']['birthdate'] ?></time>
	</div>
</article>

<?php endif; ?>
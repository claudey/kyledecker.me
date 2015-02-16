<h3>Favorite Recent Discoveries</h3>
<div class="discoveries">
	<?php $discoveries = $site->find('discoveries')->children() ?>
	<?php foreach($discoveries as $discovery): ?>
		<div class="discovery">
			<img src="<?= $discovery->images()->first()->url() ?>" alt="<?= $discovery->title() ?>">
			<h4><?= $discovery->type() ?></h4>
			<?= $discovery->title() ?>
		</div>
	<?php endforeach ?>
</div>
<?php snippet('header') ?>

<main class="main" role="main">
	<div class="wrapper">
		<div class="text">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
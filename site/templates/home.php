<?php snippet('header') ?>

<main class="main" role="main">
	<div class="wrapper-wide">
		<h1 class="page-title welcome"><?php echo $page->intro()->html() ?></h1>
	</div>
	<div class="wrapper">
		<?php if($image = $page->image('selfie.jpg')): ?>
			<img src="<?php echo $image->url() ?>" alt="Selfie time!!" itemprop="image">
		<?php endif ?>
		<div class="content">
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
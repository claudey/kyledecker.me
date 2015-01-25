<?php snippet('header') ?>

	<main class="main" role="main">
		<div class="wrapper-wide">
			<h1 class="page-title"><?php echo $page->title()->html() ?></h1>
		</div>
		<div class="wrapper">
			<div class="content">
				<?php echo $page->text()->kirbytext() ?>
			</div>
			<nav class="nextprev" role="navigation">
				<?php if($prev = $page->prevVisible()): ?>
				<a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
				<?php endif ?>
				<?php if($next = $page->nextVisible()): ?>
				<a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
				<?php endif ?>
			</nav>
		</div>
	</main>

<?php snippet('footer') ?>
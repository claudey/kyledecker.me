<?php snippet('header') ?>

<main class="main" role="main">
	<div class="wrapper-wide">
		<h1 class="page-title"><?php echo $page->title()->html() ?></h1>
	</div>
	<div class="wrapper">
		<div class="content">
			<?php echo $page->text()->kirbytext() ?>
			<?php foreach(page('projects')->children()->visible() as $project): ?>
				<div class="project">
					<?php if($image = $project->image('banner.jpg')): ?>
						<a class="project-banner" href="<?php echo $project->website()->html() ?>"><img src="<?php echo $image->url() ?>"></a>
					<?php endif ?>
					<h3 class="project-name"><?php echo $project->title()->html() ?></h3>
					<?php echo $project->intro()->kirbytext() ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
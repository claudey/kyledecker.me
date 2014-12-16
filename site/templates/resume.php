<?php snippet('header') ?>

<main class="main" role="main">
	<div class="wrapper-wide">
		<h1 class="page-title"><?php echo $site->author()->html() ?>, Designer</h1>
	</div>
	<div class="wrapper">
		<div class="resume-section">
			<ul class="skills">
				<?php foreach($page->skills()->yaml() as $skill): ?><li class="skill"><?php echo $skill['skill'] ?></li><?php endforeach ?>
			</ul>
		</div>
		<div class="resume-section">
			<h2 class="resume-section-title">Professional Experience</h2>
			<?php foreach($page->experience()->yaml() as $job): ?>
				<div class="resume-block job">
					<h3 class="resume-name"><?php echo $job['job_name'] ?></h3>
					<div class="resume-dates"><?php echo $job['job_dates'] ?></div>
					<p class="resume-desc"><?php echo $job['job_desc'] ?></p>
				</div>
			<?php endforeach ?>
		</div>
		<div class="resume-section">
			<h2 class="resume-section-title">Formal Education</h2>
			<?php foreach($page->education()->yaml() as $school): ?>
				<div class="resume-block school">
					<h3 class="resume-name"><?php echo $school['school_name'] ?></h3>
					<p class="resume-desc"><?php echo $school['school_desc'] ?></p>
				</div>
			<?php endforeach ?>
		</div>
		<p class="resume-requests"><?php echo $page->contacts()->text() ?></p>
	</div>
</main>

<?php snippet('footer') ?>
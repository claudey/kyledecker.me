<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://www.schema.org/Person">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">

	<?php if($page->isHomepage()): ?>
		<title><?php echo html($site->title()) ?></title>
	<?php else: ?>
		<title><?php echo html($page->title()) ?></title>
	<?php endif ?>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="author" content="<?php echo $site->author()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<?php echo css('assets/css/main.css') ?>

</head>
<body>
	<?php snippet('analytics') ?>
	<div class="body-wrapper">
		<header class="header wrapper" role="banner">
			<a class="logo" href="<?php echo url() ?>">
				<img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
			</a>
			<?php snippet('menu') ?>
		</header>
	
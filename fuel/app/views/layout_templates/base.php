<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<?= Asset::css('bootstrap.min.css') ?>
	<?= Asset::css('https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css') ?>
	<?= Asset::css('mystyle.css') ?>
	<?= Asset::render('library_css') ?>
	<?= Asset::render('controller_style_css') ?>
	<?= Asset::render('action_style_css') ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<section>
		<header class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>タイトル</h1>
				</div>
			</div>
		</header>
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<?= $main ?>
				</div>
			</div>
		</section>
		<footer class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copy text-center">
						Copyright 2014 <a href='#'>Website</a>
					</div>
				</div>
			</div>
		</footer>
	</section>
	<?= Asset::js('bootstrap.min.js') ?>
	<?= Asset::js('https://code.jquery.com/jquery-1.11.3.min.js') ?>
	<?= Asset::js('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') ?>
	<?= Asset::js('https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js') ?>
	<?= Asset::js('myscript.js') ?>
	<?= Asset::render('library_js') ?>
	<?= Asset::render('controller_script_js') ?>
	<?= Asset::render('action_script_js') ?>
</body>
</html>

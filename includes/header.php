<?php
	$splashText = "Kings Island";
	include('includes/data.php');
?>

<!DOCTYPE html>
<html>

	<head>
		<title><?php echo TITLE; ?></title>
		<link href="./assets/styles.css" rel="stylesheet">
	</head>

	<body id="kings-island">

		<div class="wrapper">

			<div id="banner">
				<a href="/" title="Return to Home">
					<img src="./assets/img/banner.png" alt="Kings Island">
				</a>
			</div><!-- banner -->

			<div id="nav">
				<?php include('includes/nav.php'); ?>
			</div><!-- nav -->

			<div class="content">

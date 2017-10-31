<?php
	define("TITLE", "Rides | Kings Island");

	include('includes/header.php');
?>
<div id="purpose">
	<hr>
	<h1>The Coasters</h1>
	<p>The park features twelve 'must-do' rides. They range from the now quaint seeming dual-track wooden 'Racer' to the metal behemoth known as 'Diamondback.'</p>
	<p><em>Click any coaster to learn more.</em></p>
	<hr>
</div><!-- purpose -->

<div id="coasters">
	<ul>
		<!--
			syntax: foreach ($array as $key => $value)
		-->
		<?php foreach ($rides as $ride => $item) { ?>
			<li><a href="ride.php?item=<?php echo $ride; ?>"><?php echo $item["name"]; ?></a></li>
		<?php } ?>
	</ul>
</div><!-- coasters -->

<hr>

<?php include('includes/footer.php'); ?>

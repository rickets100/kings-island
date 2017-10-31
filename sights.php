<?php
	define("TITLE", "Sights | Kings Island");
	include('includes/header.php');
?>
<div id="purpose">
	<hr>
	<h1>The Coasters</h1>
	<p>There's more to the park than just rides.</p>
	<p><em>Click any image to learn more.</em></p>
	<hr>
</div><!-- purpose -->

<div id="sights">
	<ul>
		<?php foreach ($sights as $sight => $item) { ?>
			<li><a href="sight.php?item=<?php echo $ride; ?>"><?php echo $item["name"]; ?></a></li>
		<?php } ?>
	</ul>
</div><!-- coasters -->


<?php include('includes/footer.php'); ?>

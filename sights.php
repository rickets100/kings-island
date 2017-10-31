<?php
	define("TITLE", "Sights | Kings Island");
	include('includes/header.php');
?>
<div id="purpose">
	<hr>
	<h1>Other Sights</h1>
	<p>There's more to the park than just thrill-rides! Some of my childhood favorites like the Monster are still there. Others, like the Zephyr, are newer incarnations of rides I knew as a kid (the Flying Dutchmen, in this case).</p>
	<p><em>Click any item to learn more.</em></p>
	<hr>
</div><!-- purpose -->

<div id="sights">
	<ul>
		<?php foreach ($sights as $sight => $item) { ?>
			<li><a href="sight.php?item=<?php echo $sight; ?>"><?php echo $item["name"]; ?></a></li>
		<?php } ?>
	</ul>
</div><!-- sights -->


<?php include('includes/footer.php'); ?>

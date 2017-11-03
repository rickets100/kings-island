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

<table style="width:100%">
  <tr>
    <td class="one-third">
			<div id="coasters">
				<ul>
					<?php foreach ($rides as $ride => $item) { ?>
						<li>
							<a href="ride.php?item=<?php echo $ride; ?>" onmouseover="preview.src='./assets/img/<?php echo $item["image"]; ?>.png'"><?php echo $item["name"]; ?></a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</td>
    <td class="two-thirds">
			<div class="hover-fun">
				<a id="linkorama" href=""><img name="preview" src="./assets/img/rc-backlot-300x180.png"/><div class="lower"><?php echo $item["name"];?> &#8680;</div></a>
			</div><!-- hover-fun -->
		</td>
  </tr>
</table>

<hr>
<?php include('includes/footer.php'); ?>

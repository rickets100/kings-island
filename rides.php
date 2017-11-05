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
<script>
	function onMouseOver(newImage, newText){
		let hoverFun = document.getElementsByClassName("hover-fun")[0];
		let preview = hoverFun.getElementsByClassName("preview")[0];
		let prevLabel = hoverFun.getElementsByClassName("lower")[0];

		preview.src = newImage;
		// heyText.innerHTML = newText;
		prevLabel.innerHTML = newText;
	}
</script>
<table style="width:100%">
  <tr>
    <td class="one-third">
			<div id="coasters">
				<ul>
					<?php foreach ($rides as $ride => $item) { ?>
						<li>
							<a href="ride.php?item=<?php echo $ride; ?>" onmouseover="
onMouseOver('./assets/img/<?= $item["image"]; ?>.png', '<?= $item["name"]?> &#8680;');"><?php echo $item["name"]; ?></a>
						</li>

					<?php } ?>
				</ul>
			</div>
		</td>
    <td class="two-thirds">
			<div class="hover-fun">
				<a id="linkorama" href=""><img name="preview" class="preview" src="./assets/img/rc-backlot-300x180.png"/><div name="preview-label" class="lower">Backlot Stunt Coaster &#8680;</div></a>
			</div><!-- hover-fun -->
		</td>
  </tr>
</table>
<hr>
<?php include('includes/footer.php'); ?>
<!--



-->

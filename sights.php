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

<script>
	function onMouseOver(newImage, newText, newLink, newBlurb){
		let hoverFun = document.getElementsByClassName("hover-fun")[0];
		let preview = hoverFun.getElementsByClassName("preview")[0];
		let prevLabel = hoverFun.getElementsByClassName("lower")[0];
		let link = document.getElementById("linkorama");
		let blurb = document.getElementById("description");

		preview.src = newImage;
		prevLabel.innerHTML = newText;
		link.href="sight.php?item=" + newLink;
		blurb.innerHTML = newBlurb;
	}
</script>

<table style="width:100%">
  <tr>
    <td class="one-third">
			<div id="sights">
				<ul>
					<?php foreach ($sights as $sight => $item) { ?>
						<li>
							<a href="sight.php?item=<?php echo $sight; ?>" onmouseover="
onMouseOver('./assets/img/<?= $item["image"]; ?>.png', '<?= $item["name"]?>', '<?php echo $sight ?>', '<?php echo $item["blurb"] ?>');"><?php echo $item["name"]; ?></a>
						</li>

					<?php } ?>
				</ul>
			</div>
		</td>
    <td class="two-thirds">
			<div class="hover-fun">
				<a id="linkorama" href=""><img name="preview" class="preview" src="./assets/img/sign-at-entrance-300x180.png"/><div name="preview-label" class="lower">Main Entrance</div></a>
			</div><!-- hover-fun -->
			<br>
			<p id="description"><em>Click any sight to learn more.</em></p>
		</td>
  </tr>
</table>

<?php include('includes/footer.php'); ?>

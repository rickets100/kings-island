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
<div class="row"></div>
<div class="row"></div>
<div class="container">
  <div class="row">
		For each will go here<br>
		<?php foreach ($rides as $ride => $item) { ?>
			<!-- <?php echo $item["image"] ?><br> -->
			<br>
				<div class="pic-box hover-fun">
			  <img src="./assets/img/<?php echo $item["image"]; ?>.png">
			</div>
		<?php } ?>

    <div class="row col s3 center-align">
      <div class="pic_box hover-fun">
				Image
        <!-- <a href="/trucks/{{this.id}}">
          <img src="{{ this.truck_pic }}" alt="{{ this.name }}"></a> -->
          <div class="lower">
						Name
            <!-- <h5>{{ this.name }}</h5> -->
          </div>
      </div>
    </div>
    Stuff
    </div>
  <br>
</div>
<?php include('includes/footer.php'); ?>

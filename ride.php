<?php
  define("TITLE", "Ride Details | Kings Island");
  include("includes/header.php");

  function strip_bad_chars($input) {
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
  }
  if (isset($_GET['item'])) {
    $cleanedItem = strip_bad_chars($_GET['item']);
    $ride = $rides[$cleanedItem];
  }
?>
<hr>
<div id="ride">
  <h1><?php echo $ride["name"]; ?></h1>
  <p><?php echo $ride["blurb"]?></p>
  <br>
  <strong>Max-speed: </strong><?php echo $ride["max-speed"]; ?>
  <p><strong>Duration: </strong><?php echo $ride["duration"]; ?></p>
  <img src="./assets/img/<?php echo $ride["image"]; ?>.png" alt="<?php echo $ride["name"]; ?>">
<hr>

<a href="rides.php" class="button previous">&laquo; Back to Ride List</a>
</div> <!-- rides -->

<?php include("includes/footer.php"); ?>

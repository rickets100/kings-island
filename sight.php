<?php
  define("TITLE", "Sight Details | Kings Island");
  include("includes/header.php");

  function strip_bad_chars($input) {
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
  }
  if (isset($_GET['item'])) {
    $cleanedItem = strip_bad_chars($_GET['item']);
    $sight = $sights[$cleanedItem];
  }
?>
<hr>
<div id="sights">
  <h1><?php echo $sight["name"]; ?></h1>
  <p><?php echo $sight["blurb"]?></p>
  <br>
  <img src="./assets/img/<?php echo $sight["image"]; ?>.png" alt="<?php echo $sight["name"]; ?>">
  <br>
  <strong>Location: </strong><?php echo $sight["location"]; ?>
<hr>

<a href="sights.php" class="button previous">&laquo; Back to Sight List</a>
</div> <!-- rides -->

<?php include("includes/footer.php"); ?>

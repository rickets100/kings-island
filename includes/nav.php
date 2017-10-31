<!-- <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="sights.php">Sights</a></li>
  <li><a href="rides.php">Rides</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul> -->

<ul>
  <?php
    foreach($navItems as $item) {
      echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
    }
  ?>
</ul>

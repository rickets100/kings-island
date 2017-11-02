
        <div id="footer" class="cf">
          <div class="footer-column three">
            <strong>Phone</strong>
            555.555.5555
          </div>
          <div class="footer-column three">
            <strong>Location</strong>
            1101 A Street<br>
            Eau Claire, WI 55555
          </div>
          <div class="footer-column three last">
            <strong>Hours</strong>
            <!-- <em>Tuesday - Thursday</em><br>
            1:00 - 9:00pm<br><br>
            <em>Friday - Saturday</em><br>
            4:00 - 11:00pm<br><br>
            <em>Sunday - Monday</em><br>
            Closed<br><br> -->
            <?php include('includes/store-hours.php'); ?>

          </div>
        </div> <!-- footer -->
        <small>&copy:<?php echo date('Y'); ?> <?php echo $companyName; ?></small>
      </div> <!-- content -->

    </div> <!-- main-wrapper -->
  </body>
</html>

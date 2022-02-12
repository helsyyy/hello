<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Navigation</h5>

        <ul class="list-unstyled">
          <li>
            <a href="<?php echo $settings['site_href'] ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo $settings['site_href'] ?>/Register.php">Add Character</a>
          </li>
          <li>
            <a href="<?php echo $settings['site_href'] ?>/spisok.php">Spisok</a>
          </li>
          <li>
            <a href="<?php echo $settings['site_href'] ?>/admin/">Admin Panel</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-6 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">We on map</h5>

       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8897.643471669346!2d35.028247699924215!3d48.47024229776508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2f9e0a33067%3A0xaabc99b8d8c9eaeb!2sLazar%20Globa%20Park!5e0!3m2!1sru!2sua!4v1641642206584!5m2!1sru!2sua" width= "100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>


      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Shared Links</h5>

        <ul class="list-unstyled">
           <?php if($settings['href_insta']) {?>
          <li>
            <a href="<?php echo $settings['href_insta'] ?>">Instagram</a>
          </li>
          <li>
             <?php } if($settings['href_facebook']) {?>
            <a href="<?php echo $settings['href_facebook'] ?>">Facebook</a>
          </li>
          <?php } if($settings['href_youtube']) {?>
          <li>
            <a href="<?php echo $settings['href_youtube'] ?>">YouTube</a>
          </li>
        <?php } ?>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© Сайт сделан в 2021: <?php echo "<a href = '" . $settings['site_href'] . "'>" . $settings['site_name'] . "</a>" ?>

  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
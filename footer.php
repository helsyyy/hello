<!-- Footer -->
отредактировано
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
            <a href="<?php echo $settings['site_href'] ?>/form.php">Add person</a>
          </li>
          <li>
            <a href="<?php echo $settings['site_href'] ?>/spisok.php">Spisok</a>
          </li>
          <li>
            <a href="<?php echo $settings['site_href'] ?>/admin/">Admin panel</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-6 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">We on map</h5>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1575.2830991158874!2d35.04134197339046!3d48.39318509737972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2e3643f3c01%3A0x586566b4e2eb2692!2z0KHQutCy0LXRgCDQk9C10YDQvtC10LIsINCU0L3QuNC_0YDQviwg0JTQvdC10L_RgNC-0L_QtdGC0YDQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDQ5MDAw!5e0!3m2!1sru!2sua!4v1641642203602!5m2!1sru!2sua" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>
      <!-- Grid column -->



      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Shared Links</h5>

        <ul class="list-unstyled">
          <?php if ($settings['href_insta']) { ?>
          <li>
            <a href="<?php echo $settings['href_insta'] ?>">Instagramm</a>
          </li>
          <?php } if ($settings['href_facebook']) { ?>
          <li>
            <a href="<?php echo $settings['href_facebook'] ?>">Facebook</a>
          </li>
          <?php } if ($settings['href_youtube']) { ?>
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
  <div class="footer-copyright text-center py-3">Created by <b>CheredaikoVI</b> -
    <?php echo "<a href='" . $settings['site_href'] . "'>" . $settings['site_name'] . "</a>" ?>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

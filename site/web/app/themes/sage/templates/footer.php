<footer class="footer">
  <div class="footer-row">
    <div class="footer-content-wrapper">
      <h3>Looking to Host an Event at Frieda Garcia Park?</h3>
      <p>
        Please reach out if you would like to host a public event at Frieda
        Garcia Park. There may be an opportunity for the friends of Frieda
        Garcia Park to help underwrite the costs, at our discretion.
      </p>
      <a class="btn" href="<?php echo home_url();?>/host-an-event">
        Host An Event
      </a>
    </div>
    <div class="footer-content-wrapper">
      <h3>Visit the Park:</h3>
          <p>
            38 Stanhope Street<br>
          Boston, MA 02116<br>
          <a href="mailto:clerk@friedagarciapark.com">clerk@friedagarciapark.com</a>
          <br>
          <a href="https://www.facebook.com/friendsoffriedagarciapark/" target="_blank">
            Facebook
          </a><br>
          <a href="https://www.instagram.com/frieda_garcia_park/" target="_blank">
            Instagram
          </a>
        </p>
    </div>
    <div class="footer-navigation-wrapper">
      <h3>Site Map</h3>
      <?php $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
        'container_class' => false, 'menu_class' => false, );
        wp_nav_menu($MainMenu);
      ?>
    </div>

    <section class="footer-footnote">
      <small>&copy; <?php echo date("Y"); ?> <?php echo bloginfo($show = 'name'); ?>. All Rights Reserved.
        Designed by <a href="http://www.muigaiunaka.com" target="_blank">Muigai Unaka</a>.
        Built by <a href="http://www.resilientcoders.org" target="_blank">Resilient Coders</a>.
      </small>
    </section>

  </div>
</footer>

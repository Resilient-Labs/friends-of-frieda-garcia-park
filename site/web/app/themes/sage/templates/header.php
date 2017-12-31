<header class="header">
  <nav>
    <div class="header-logo-wrapper">
      <a href="<?php echo home_url();?>" class="logo">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" />
      </a>
    </div>
    <div class="header-navigation-wrapper"> 
      <?php $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
        'container_class' => false, 'menu_class' => false, );
        wp_nav_menu($MainMenu);
      ?>
    </div>
    <div class="mobile-navigation-hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>
    <div class="mobile-navigation">
      <?php $MainMenu = array('menu'=> 'Main Menu', 'container' => false,
        'container_class' => false, 'menu_class' => false, );
        wp_nav_menu($MainMenu);
      ?>
    </div>
  </nav>
</header>

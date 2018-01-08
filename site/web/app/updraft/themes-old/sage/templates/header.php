<header class="clearfix">
  <nav>
    <a href="<?php echo home_url();?>" class="logo">
      <img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" alt="ffgp-logo"/>
    </a>
    <?php wp_nav_menu(array(
	     'menu' => 'Dropdown Menu',
	     'container_id' => 'cssmenu',
	     'walker' => new CSS_Menu_Walker()
     )); ?>
    <div class="hamburger-menu">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="hamburger-nav">
      <?php wp_nav_menu(array(
        'menu' => 'Mobile Menu'
      )); ?>
    </div>
  </nav>
</header>

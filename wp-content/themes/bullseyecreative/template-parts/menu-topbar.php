<div class="title-bar stacked-for-medium" data-responsive-toggle="responsive-menu" data-hide-for="medium">
  <div class="title-bar-title">
    <div class="site-branding site-branding-small">
      <?php if (get_custom_logo()) :
        the_custom_logo();
      else : ?>
        <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
      <?php endif; ?>
    </div><!-- .site-branding -->
  </div>
  <div class="float-right">
    <button class="menu-icon" type="button" data-toggle="offCanvas"></button>
  </div>
</div>

<nav class="top-bar" id="responsive-menu" role="navigation">
  <div class="top-bar-left show-for-medium">
    <div class="site-branding site-branding-large">
      <?php if (get_custom_logo()) :
        the_custom_logo();
      else : ?>
        <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
      <?php endif; ?>
    </div><!-- .site-branding-large -->
  </div>
  <div class="top-bar-right">
    <?php wp_nav_menu( array(
    		'theme_location' => 'primary',
    		'menu' => 'Primary Menu',
    		'container' => false, // remove nav container
    		'container_class' => '', // class of container
    		'menu_class' => 'dropdown vertical medium-horizontal menu', // adding custom nav class
    		'items_wrap' => '<ul data-dropdown-menu id="%1$s" class="%2$s">%3$s</ul>',
    		'before' => '', // before each link <a>
    		'after' => '', // after each link </a>
    		'link_before' => '', // before each link text
    		'link_after' => '', // after each link text
    		'depth' => 5, // limit the depth of the nav
    		'fallback_cb' => false, // fallback function (see below)
    		'walker' => new top_bar_walker()
    	) ); ?>
  </div>
</nav><!-- .top-bar -->

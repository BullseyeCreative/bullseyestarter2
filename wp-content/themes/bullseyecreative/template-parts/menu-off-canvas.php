
 <!-- Close button -->
 <div class="main-navigation off-canvas position-right show-for-medium-down" id="offCanvas" data-off-canvas data-content-scroll="false" data-transition="push">
   <div class="title-bar stacked-for-medium">
     <div class="float-right">
       <button class="close-button" aria-label="Close alert" data-toggle="offCanvas" type="button">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
   </div>
   <!-- Menu -->

   <?php wp_nav_menu( array(
       'theme_location' => 'primary',
       'menu' => 'Primary Menu',
       'container' => false, // remove nav container
       'container_class' => '', // class of container
       'menu_class' => 'vertical  menu', // adding custom nav class
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
 <!-- <button class="close-button" aria-label="Close menu" type="button" data-close>
   <span aria-hidden="true">&times;</span>
 </button> -->

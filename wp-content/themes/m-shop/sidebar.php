<?php
/**
 * Primary sidebar
 *
 * @package  M Shop
 * @since 1.0.0
 */
$sidebar = apply_filters( 'm_shop_get_sidebar', 'sidebar-1' );
?>
<div id="sidebar-primary" class="sidebar-content-area  <?php echo esc_attr(apply_filters( 'm_shop_stick_sidebar_class',''));?>">
  <div class="sidebar-main">
    <?php
    if ( is_active_sidebar($sidebar) ){
    dynamic_sidebar($sidebar);
     }
      ?>
  </div>  <!-- sidebar-main End -->
</div> <!-- sidebar-primary End -->                
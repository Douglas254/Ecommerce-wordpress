<?php 
/**
 * Header Function for big store theme.
 * 
 * @package     big store
 * @author      big store
 * @copyright   Copyright (c) 2019, big store
 * @since       big store 1.0.0
 */
/**************************************/
//Main Header function
/**************************************/
if ( ! function_exists( 'm_shop_main_header_markup' ) ){	
function m_shop_main_header_markup(){ 

?>
<div class="main-header   <?php echo esc_attr(get_theme_mod('m_shop_canvas_alignment')); ?>">
			<div class="container">
        <div class="desktop-main-header">
				<div class="main-header-bar thnk-col-3">
					<div class="main-header-col1">
           <?php do_action('before_logo_canvas');?>
          <span class="logo-content">
            <?php m_shop_logo();?> 
          </span>
           <?php do_action('after_logo_canvas');?>
        </div>
					<div class="main-header-col2">
          <?php 
                    m_shop_th_advance_product_search();
          ?>
          </div>
					<div class="main-header-col3">
             <?php m_shop_main_header_optn();?>
          </div>
				</div> 
      </div>
      <!-- end main-header-bar -->
			</div>
		</div> 
<?php	}
}
add_action( 'm_shop_main_header', 'm_shop_main_header_markup' );

function m_shop_main_header_optn(){
          ?>
       <div class="header-support-wrap">  
        <div class="header-support-icon"> 
          <?php if((m_shop_class_sidebar()=='right-side') || (m_shop_class_sidebar()=='left-side')){ ?>

                 <div class="menu-toggle">
                    <button type="button" class="menu-btn" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                </div>   

                <?php } ?> 

                <?php m_shop_header_icon(); 

                if(get_theme_mod('m_shop_cart_mobile_disable')==true){

                if(wp_is_mobile()!== true):

                ?>

                <div class="thunk-icon"> 

                <?php if(class_exists( 'WooCommerce' )){ ?>

                   <?php m_shop_th_cart(); ?>

                <?php } ?>  

                </div> 

                <?php endif;} elseif(get_theme_mod('m_shop_cart_mobile_disable')==false){ ?>
                
                <div class="thunk-icon">

                <?php if(class_exists('WooCommerce')){ ?>

                   <?php m_shop_th_cart(); ?>
                   
                <?php  } ?>  

                </div> 

                <?php } ?>

              </div>  

          </div>
<?php }
/**************************************/
//logo & site title function
/**************************************/
if ( ! function_exists( 'm_shop_logo' ) ){
function m_shop_logo(){
$title_disable          = get_theme_mod( 'title_disable','enable');
$tagline_disable        = get_theme_mod( 'tagline_disable','enable');
$description            = get_bloginfo( 'description', 'display' );
m_shop_custom_logo(); 
if($title_disable!='' || $tagline_disable!=''){
if($title_disable!=''){ 
?>
<div class="site-title"><span>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
</span>
</div>
<?php
}
if($tagline_disable!=''){
if( $description || is_customize_preview() ):?>
<div class="site-description">
   <p><?php echo esc_html($description); ?></p>
</div>
<?php endif;
      }
    } 
  }
}

/**********************************/
// header icon function
/**********************************/
function m_shop_header_icon(){
    if ( class_exists( 'WooCommerce' ) ){
?>
<div class="header-icon">
<?php 
if(get_theme_mod('m_shop_account_mobile_disable')==true){
  if (wp_is_mobile()!== true):
m_shop_account();
endif;
}elseif(get_theme_mod('m_shop_account_mobile_disable')==false){
  m_shop_account();
}

if(get_theme_mod('m_shop_whislist_mobile_disable')==true){
  if (wp_is_mobile()!== true):
if( class_exists( 'YITH_WCWL' ) && (! class_exists( 'WPCleverWoosw' ))){?>
 <a class="whishlist" href="<?php echo esc_url( m_shop_whishlist_url() ); ?>">
        <i  class="fa fa-heart-o" aria-hidden="true"></i><span class="tooltiptext"><?php echo esc_html('Wishlist','m-shop');?></span></a>
      <?php }
      //WPC WISHLIST 
     if( class_exists( 'WPCleverWoosw' )){ ?>
      <a class="whishlist" href="<?php echo esc_url( WPcleverWoosw::get_url()); ?>">
        <i  class="fa fa-heart-o" aria-hidden="true"></i><span class="tooltiptext"><?php echo esc_html('Wishlist','m-shop');?></span></a>
   <?php  } 

   endif; }elseif(get_theme_mod('m_shop_whislist_mobile_disable')==false){
    if( class_exists( 'YITH_WCWL' ) && (! class_exists( 'WPCleverWoosw' ))){?>
 <a class="whishlist" href="<?php echo esc_url( m_shop_whishlist_url() ); ?>">
        <i  class="fa fa-heart-o" aria-hidden="true"></i><span class="tooltiptext"><?php echo esc_html('Wishlist','m-shop');?></span></a>
      <?php } 

      //WPC WISHLIST 
     if( class_exists( 'WPCleverWoosw' )){ ?>
      <a class="whishlist" href="<?php echo esc_url( WPcleverWoosw::get_url()); ?>">
        <i  class="fa fa-heart-o" aria-hidden="true"></i><span class="tooltiptext"><?php echo esc_html('Wishlist','m-shop');?></span></a>
   <?php  } 

   } ?>
</div>
<?php } }

/**************************/
//PRELOADER
/**************************/
if( ! function_exists( 'm_shop_preloader' ) ){
 function m_shop_preloader(){
 if (( isset( $_REQUEST['action'] ) && 'elementor' == $_REQUEST['action'] ) ||
                isset( $_REQUEST['elementor-preview'] )){
      return;
 }else{    
    $m_shop_preloader_enable = get_theme_mod('m_shop_preloader_enable',false);
    $m_shop_preloader_image_upload = get_theme_mod('m_shop_preloader_image_upload');
    if($m_shop_preloader_enable==true){ ?>
    <div class="m_shop_overlayloader">
    <div class="m-shop-pre-loader"><img src="<?php echo esc_url($m_shop_preloader_image_upload);?>"></div>
    </div> 
   <?php }
   }
 }

}
add_action('m_shop_site_preloader','m_shop_preloader');
/*****************/
/*mobile nav bar*/
/*****************/
function mshop_mobile_navbar(){?>
  <?php if(class_exists( 'WooCommerce' )){?>
<div id="mshop-mobile-bar">
  <ul>
    
    <li><a class="gethome" href="<?php echo esc_url( get_home_url() ); ?>"><i class="icon below fa fa-home" aria-hidden="true"></i></a></li>
    <?php 
    if( class_exists( 'YITH_WCWL' ) && (! class_exists( 'WPCleverWoosw' ))){ ?>
    <li><a class="whishlist" href="<?php echo esc_url( m_shop_whishlist_url() ); ?>"><i  class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    <?php } 
    if( class_exists( 'WPCleverWoosw' )){ ?>
      <li><a class="whishlist" href="<?php echo esc_url( WPcleverWoosw::get_url()); ?>"><i  class="fa fa-heart-o" aria-hidden="true"></i></a></li>
  <?php  }
    ?>
    <li>
            <a href="#" class="menu-btn" id="mob-menu-btn">
              
                <i class="icon fa fa-bars" aria-hidden="true"></i>
                
            </a>
 
       </li>
    <li><?php m_shop_account();?></li>
    <li><?php 
           do_action( 'open_cart_count' ); 
        ?> 
    </li>
    
  </ul>
</div>
<?php }}
add_action( 'wp_footer', 'mshop_mobile_navbar' );

/// mobile panel

function m_shop_menu_cat_panel(){
if(m_shop_class_sidebar()!=='default'){?>
<div class="site-overlay"></div>
<div class="m-shop-side-nav-wrap">
  <?php m_shop_sidebar_panel();?>
</div>  
 <?php }
}
add_action( 'm_shop_main_header', 'm_shop_menu_cat_panel' );
//**************************//
//Front Side Panel
//**************************//
function m_shop_sidebar_panel(){
  ?>
      <div class="sidebar-nav-bar">
        <div class="sider-inner">
        
          <div class="sidebar-tab-wrap">
              <?php if(class_exists( 'WooCommerce' )){?>
               <div class="sidebar-nav-tabs">
                <ul>
                   <li class="primary  current" data-menu="sidebar-nav-tab-menu">
                     <a href="#sidebar-nav-tab-menu"><?php _e('Menu','m-shop');?></a>
                  </li>
                  <li class="categories" data-menu="sidebar-nav-tab-category">
                    <a href="#sidebar-nav-tab-category"><?php _e('Categories','m-shop');?></a>
                  </li>
                 
                
                </ul>
            </div>
            <?php }?>
             <?php if(class_exists( 'WooCommerce' )){?>
           <div id="sidebar-nav-tab-category" class="sidebar-nav-tab-category panel ">
             <?php m_shop_product_list_categories_pan(); ?>
           </div>
           <?php }?>
            <div id="sidebar-nav-tab-menu" class="sidebar-nav-tab-menu panel current">
          <?php if(has_nav_menu('m-shop-main-menu' )){ 
                   
                        m_shop_main_nav_menu();
              }else{
                 wp_page_menu(array( 
                 'items_wrap'  => '<ul class="m-shop-menu" data-menu-style="horizontal">%3$s</ul>',
                 'link_before' => '<span>',
                 'link_after'  => '</span>'));
             }?>
           </div>
           
          </div>
         
           <div class="sidebar-nav-widget">
                <?php 
                m_shop_side_pan_row_one();
                m_shop_side_pan_row_two();
                ?>
           </div>
        
        </div>
      </div>
<?php 
}

//********************************
//th advance product search 
//*******************************
function m_shop_th_advance_product_search(){

              if ( shortcode_exists('th-aps') ){

                echo do_shortcode('[th-aps]');

              } elseif ( !shortcode_exists('th-aps') && is_user_logged_in()) {

                $url = admin_url('themes.php?page=thunk_started&th-tab=recommended-plugin');

                $pro_url =admin_url('plugin-install.php?s=th%20advance%20product%20search&tab=search&type=term');

                $url = (function_exists("m_shop_pro_load_plugin"))?$pro_url:$url;

                ?>

                <a target="_blank" class="plugin-active-msg" href="<?php echo esc_url($url);?>">

                  <?php _e('Please Install "th advance product search" Plugin','m-shop');?>
                  
                </a>


                <?php      

            }
}

//********************************//
//th woo cart 
//*******************************//

function m_shop_th_cart(){

  if ( shortcode_exists('taiowc') ){

                echo do_shortcode('[taiowc]');

              } elseif ( !shortcode_exists('taiowc') && is_user_logged_in()) {

                $url = admin_url('themes.php?page=thunk_started&th-tab=recommended-plugin');

                $pro_url =admin_url('plugin-install.php?s=th%20all%20in%20one%20woo%20cart&tab=search&type=term');

                $url = (function_exists("m_shop_pro_load_plugin"))?$pro_url:$url;

                ?>

                <a target="_blank" class="cart-plugin-active-msg" href="<?php echo esc_url($url);?>">

                  <?php _e('Add Cart','m-shop');?>
                  
                </a>


                <?php      

            }
}
//**************************//
//Side Bar Markup
//**************************//
function m_shop_sidebar_panel_markup(){ ?>
<div class="side-site-overlay"></div>
<aside class="m-shop-sidebar">
<?php if(m_shop_class_sidebar()=='right-side' || m_shop_class_sidebar()=='left-side'){
   get_sidebar();
}elseif(m_shop_class_sidebar()=='default' || m_shop_class_sidebar()==''){
   m_shop_sidebar_panel();
}?>
</aside>
<?php }
add_action( 'm_shop_asidebar', 'm_shop_sidebar_panel_markup' );
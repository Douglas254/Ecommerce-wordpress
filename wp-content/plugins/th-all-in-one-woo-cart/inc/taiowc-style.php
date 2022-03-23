<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

/***Front Custom Style********/

function taiowc_style($taiowc_custom_css=''){

if(taiowc()->get_option( 'tpcrt_show_quantity' )== true){
  $taiowc_custom_css.=".cart-count-item{display:block;}";
}else{
 $taiowc_custom_css.=".cart-count-item{display:none;}";

}


if(taiowc()->get_option( 'fxcrt_show_quantity' )== true){
  $taiowc_custom_css.=".cart_fixed_1 .cart-count-item{display:block;}";
}else{
 $taiowc_custom_css.=".cart_fixed_1 .cart-count-item{display:none;}";

}

// cart panel style

$cart_pan_icon_shw    = taiowc()->get_option( 'cart_pan_icon_shw' );

if($cart_pan_icon_shw == true){

$taiowc_custom_css.=".cart-heading svg{display:block}";

}else{

  $taiowc_custom_css.=".cart-heading svg{display:none}";

}

//fixed cart position
$fxd_cart_position  = esc_html(taiowc()->get_option( 'fxd_cart_position' ));
$fxd_cart_frm_right  = esc_html(taiowc()->get_option( 'fxd_cart_frm_right' ));
$fxd_cart_frm_left  = esc_html(taiowc()->get_option( 'fxd_cart_frm_left' ));
$fxd_cart_frm_btm  = esc_html(taiowc()->get_option( 'fxd_cart_frm_btm' ));

if($fxd_cart_position == 'fxd-left'){

    $taiowc_custom_css.=".cart_fixed_1 .taiowc-content{left:{$fxd_cart_frm_left}px; bottom:{$fxd_cart_frm_btm}px; right:auto} .cart_fixed_1 .cart-count-item{
       right: -18px;
       left:auto;
    }";
      
}

if($fxd_cart_position == 'fxd-right'){

    $taiowc_custom_css.=".cart_fixed_1 .taiowc-content{right:{$fxd_cart_frm_right}px; bottom:{$fxd_cart_frm_btm}px; left:auto} .taiowc-wrap.cart_fixed_2{right:0;left:auto;}.cart_fixed_2 .taiowc-content{
    border-radius: 5px 0px 0px 0px;} .cart_fixed_2 .taiowc-cart-close{left:-20px;}";

}



return $taiowc_custom_css;
}
<?php
/**
 * Plugin Name:             TH Advance Product Search
 * Plugin URI:              https://themehunk.com
 * Description:             TH Advance Product Search plugin is a powerful AJAX based search plugin which will display result for Product, Post and Pages. This plugin is capable to search across all your WooCommerce products ( Product title, Description, Categories, ID and SKU ) . Plugin comes with user friendly settings, You can use shortcode and widget to display search bar at your desired location.This plugin provide you freedom to choose color and styling to match up with your website. It also supports Google search analytics to monitor your website visitor and searching behaviour. <a href="https://themehunk.com/plugins/" target="_blank">Get more plugins for your website on <strong>ThemeHunk</strong></a>
 * Version:                 1.1.2
 * Author:                  ThemeHunk
 * Author URI:              https://themehunk.com
 * Requires at least:       5.0
 * Tested up to:            5.9
 * WC requires at least:    3.2
 * WC tested up to:         5.1
 * Domain Path:             /languages
 * Text Domain:             th-advance-product-search
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if (!defined('TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_FILE')) {
    define('TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_FILE', __FILE__);
}

if (!defined('TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_URI')) {
    define( 'TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}

if (!defined('TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_PATH')) {
    define( 'TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

if (!defined('TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_DIRNAME')) {
    define( 'TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_DIRNAME', dirname( plugin_basename( __FILE__ ) ) );
}

if (!defined('TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_BASENAME')) {
    define( 'TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

if (!defined('TH_ADVANCE_PRODUCT_SEARCH_IMAGES_URI')) {
define( 'TH_ADVANCE_PRODUCT_SEARCH_IMAGES_URI', trailingslashit( plugin_dir_url( __FILE__ ) . 'images' ) );
}

if (!defined('TH_ADVANCE_PRODUCT_SEARCH_VERSION')) {
    $plugin_data = get_file_data(__FILE__, array('version' => 'Version'), false);
    define('TH_ADVANCE_PRODUCT_SEARCH_VERSION', $plugin_data['version']);
} 

if (!class_exists('TH_Advance_Product_Search')) {
include_once(TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_PATH . 'inc/themehunk-menu/admin-menu.php');
require_once("inc/thaps.php");
require_once("notice/th-notice.php");
} 

        /**
         * Add the settings link to the plugin row
         *
         * @param array $links - Links for the plugin
         * @return array - Links
         */
        function th_advance_product_search_plugin_action_links($links) {

                      $settings_page = add_query_arg(array('page' => 'th-advance-product-search'), admin_url('admin.php'));

                      $settings_link = '<a href="'.esc_url($settings_page).'">'.__('Settings', 'th-advance-product-search' ).'</a>';

                      array_unshift($links, $settings_link); 

                      return $links;
        }

        add_filter('plugin_action_links_'.TH_ADVANCE_PRODUCT_SEARCH_PLUGIN_BASENAME, 'th_advance_product_search_plugin_action_links', 10, 1);


    /**
   * Add links to plugin's description in plugins table
   *
   * @param array  $links  Initial list of links.
   * @param string $file   Basename of current plugin.
   *
   * @return array
   */
if ( ! function_exists( 'th_advance_product_search_plugin_meta_links' ) ){

  function th_advance_product_search_plugin_meta_links($links, $file){

    if ($file !== plugin_basename(__FILE__)) {
      return $links;
    }

    //$demo_link = '<a target="_blank" href="#" title="' . __('Live Demo', 'th-variation-swatches') . '"><span class="dashicons  dashicons-laptop"></span>' . __('Live Demo', 'th-advance-product-search') . '</a>';

    $doc_link = '<a target="_blank" href="https://themehunk.com/docs/th-advance-product-search/" title="' . __('Documentation', 'th-advance-product-search') . '"><span class="dashicons  dashicons-search"></span>' . __('Documentation', 'th-advance-product-search') . '</a>';

    $support_link = '<a target="_blank" href="https://themehunk.com/contact-us/" title="' . __('Support', 'th-advance-product-search') . '"><span class="dashicons  dashicons-admin-users"></span>' . __('Support', 'th-advance-product-search') . '</a>';

    $pro_link = '<a target="_blank" href="https://themehunk.com/advance-product-search/" title="' . __('Premium Version', 'th-advance-product-search') . '"><span class="dashicons  dashicons-cart"></span>' . __('Premium Version', 'th-advance-product-search') . '</a>';

    $links[] = $doc_link;
    $links[] = $support_link;
    $links[] = $pro_link;

    return $links;

  } // plugin_meta_links

}
add_filter('plugin_row_meta', 'th_advance_product_search_plugin_meta_links', 10, 2);



         // svg icon style

        function th_advance_product_search_icon_style_svg($classes, $fill){ ?>

              <svg class="<?php echo esc_attr($classes); ?>" xmlns="http://www.w3.org/2000/svg" fill="<?php echo esc_attr($fill); ?>" viewBox="0 0 30 30" width="23px" height="23px"><path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"/></svg>

        <?php }
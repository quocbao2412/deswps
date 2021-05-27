<?php
// Exit if accessed directly.
if (!defined('ABSPATH')){
    exit;
}
// gets the current theme
$theme = wp_get_theme(); 
if ( 'Royal Shop' == $theme ){
  return;
 }
if ( ! class_exists( 'Zita_Site_Library_Notice' ) ){
  class Zita_Site_Library_Notice{
    function __construct(){
      add_action( 'admin_notices', array( $this, 'admin_notice' ));
      add_action( 'admin_init', array( $this, 'notice_ignore' ));
      add_action( 'admin_enqueue_scripts', array( $this, 'notice_scripts' ));
    }
    function admin_notice() {
      global $current_user;
      $user_id = $current_user->ID;

      if ( ! get_user_meta( $user_id, 'th_thunk_notice_ignore' ) ) {
        ?>
                <div class="notice thunk-notice">
                    <div class="thunk-review-thumbnail">
                        <a href="https://wpzita.com/royal-shop/"
                           target="_blank">
                            <img src="<?php echo ZITA_SITE_LIBRARY_URI.'notify/assets/plugin-banner.png'; ?>" />
                        </a>
                    </div>
                    <div class="thunk-notice-text">
                        <h3><?php esc_html_e( 'Royal Shop - New Free WooCommerce Theme', 'zita-site-library' ) ?></h3>
                        <p>
              <?php esc_html_e( 'Royal Shop is a free eCommerce WordPress theme, Specially made for WooCommerce. Theme comes
                            with one click demo import feature, Which help you to setup website in few minutes. You can
                            create single as well as multi vendor store using this theme.', 'zita-site-library' ) ?>
                        </p>
                        <ul class="thunk-review-ul">
                            <li class="show-mor-message">
                                <a href="https://wpzita.com/royal-shop/#themedemo"
                                   target="_blank">
                                    <span class="dashicons dashicons-desktop"></span>
                  <?php esc_html_e( 'Live Demo', 'zita-site-library' ) ?>
                                </a>
                            </li>
                            <li class="free-download-message">
                                <a href="https://wpzita.com/royal-shop/"
                                   target="_blank">
                                    <span class="dashicons dashicons-external"></span>
                  <?php esc_html_e( 'Check Detail', 'zita-site-library' ) ?>
                                </a>
                            </li>
                            <li class="hide-message">
                <?php printf( '<a href="%1$s" class="dashicons-dismiss-icon"><span class="dashicons dashicons-welcome-comments"></span>Hide message</a>', '?th_thunk_notice_ignore=1' ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
        <?php
      }
    }

    function notice_ignore() {
      global $current_user;
      $user_id = $current_user->ID;

      if ( isset( $_GET['th_thunk_notice_ignore'] ) ) {
        if ( $_GET['th_thunk_notice_ignore'] == '1' ) {
          update_user_meta( $user_id, 'th_thunk_notice_ignore', 'true', true );
        } else {
          delete_user_meta( $user_id, 'th_thunk_notice_ignore' );
        }
      }
    }

    function notice_scripts(){
     wp_enqueue_style( 'th-notice', ZITA_SITE_LIBRARY_URI.'notify/assets/notice.css', array(), '1.0.0' );
    }
  }
  new Zita_Site_Library_Notice();
}
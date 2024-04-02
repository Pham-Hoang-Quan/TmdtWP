<?php
/**
 * Add the about page under appearance.
 *
 * Display the details about the theme information
 *
 * @package blackcart
 */
?>
<?php
// About Information
add_action( 'admin_menu', 'blackcart_about' );
function blackcart_about() {         
        add_theme_page( esc_html__('About Theme', 'blackcart'), esc_html__('BlackCart Theme', 'blackcart'), 'edit_theme_options', 'blackcart-about', 'blackcart_about_page');   
}

// CSS for About Theme Page
function blackcart_admin_theme_style($hook) {

        if ( 'appearance_page_blackcart-about' != $hook ) {
        return;
    }

   wp_enqueue_style('blackcart-admin-style', get_template_directory_uri() . '/inc/admin/theme-info.css');
}
add_action('admin_enqueue_scripts', 'blackcart_admin_theme_style');

function blackcart_about_page() {
$theme = wp_get_theme();
$pro_purchase_url = "https://themecanary.com/pricing/blackcart/";
$doc_url = "https://themecanary.com/documentation/blackcart/";
$demo_url = "https://demo.themecanary.com/blackcart/#demos";
$support_url = "https://wordpress.org/support/theme/blackcart/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
$plugin_is_installed = file_exists( WP_PLUGIN_DIR. '/one-click-demo-import' );
$plugin_is_active = is_plugin_active( 'one-click-demo-import/one-click-demo-import.php' );
?>
<div class="blackcart-wrapper">
  <div id="theme-info-page">
    <div class="admin-banner">
      <div class="banner-left">
        <h2>
          <?php echo esc_html( $theme->Name ); ?>
        </h2>
        <p>
          <?php esc_html_e( 'Multipurpose WordPress Block Based Theme', 'blackcart' ); ?>
        </p>
      </div>
      <div class="banner-right">
        <div class="blackcart-buttons">
          <a href="<?php echo esc_url($doc_url); ?>" class="blackcart-admin-button demo" target="_blank" rel="noreferrer">
            <?php esc_html_e( 'Documentation', 'blackcart' ); ?>
          </a>
          <a href="<?php echo  esc_url($demo_url); ?>" class="blackcart-admin-button documentation" target="_blank" rel="noreferrer">
            <?php esc_html_e( 'Demo', 'blackcart' ); ?>
          </a>
          <a href="<?php echo  esc_url($pro_purchase_url); ?>" class="blackcart-admin-button upgrade-to-pro" target="__blank">
            <?php echo esc_html( 'Upgrade Pro', 'blackcart' ); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="theme-canary-demo-import">
      <h2><?php esc_html_e( 'Download Demo content for Free!', 'blackcart' ); ?></h2>
      <p><?php esc_html_e( 'Install Recommended Plugins and access to all the Theme Canary Demo templates. This plugin will help you to show exactly as shown in demo', 'blackcart' ); ?></p>
        <?php if ( ! $plugin_is_installed  ): ?>
        <a href="javascript:void(0);"  class="blackcart-admin-button blackcart-install-plugin" >
          <span class="dashicons dashicons-arrow-down-alt"></span>
            <?php printf( esc_html( 'Install Plugin', 'blackcart' ), $theme->Name ); ?>
        </a>
        <?php elseif ( $plugin_is_installed && ! $plugin_is_active ): ?>
        <a href="javascript:void(0);"  class="blackcart-admin-button blackcart-activate-plugin" >
          <span class="dashicons dashicons-arrow-down-alt"></span>
            <?php printf( esc_html( 'Activate Plugin', 'blackcart' ), $theme->Name ); ?>
        </a>
        <?php else:?>
        <a href="<?php echo esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ); ?>"  class="blackcart-admin-button" >
          <span class="dashicons dashicons-arrow-down-alt"></span>
            <?php printf( esc_html( 'Explore Templates', 'blackcart' ), $theme->Name ); ?>
        </a>
        <?php endif; ?>
          <small><?php esc_html_e( 'Note: Clicking the button will both install and activate recommended plugins. It may take few minutes to install all the plugins', 'blackcart' ); ?></small>
    </div>
    <div class="feature-list">
          <div class="blackcart-about-container compare-table">
              <h3>
                <?php echo esc_html( $free_theme_name ); ?>
                <?php esc_html_e( 'Free Vs Pro', 'blackcart' ); ?>
              </h3>
              <table>
                <thead>
                  <tr>
                    <th>
                      <?php esc_html_e( 'Features', 'blackcart' ); ?>
                    </th>
                    <th>
                      <?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Free', 'blackcart' ); ?>
                    </th>
                    <th>
                      <?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Pro', 'blackcart' ); ?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Easy Setup', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Responsive', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Advance Color Options', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( '800+ Fonts', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Slider Options ', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Customizer', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Front/ Home page posts categories', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Boxed Layout', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Sidebar', 'blackcart' ); ?>
                    </td>
                    <td><?php esc_html_e('Right Sidebar','blackcart'); ?></span>
                    </td>
                    <td><?php esc_html_e('Right/Left/ Fullwidth/ No Sidebar','blackcart'); ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Back to Top', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'bbPress Compatibility', 'blackcart' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Styles', 'blackcart' ); ?>
                    </td>
                    <td><?php esc_html_e('4','blackcart'); ?></span>
                    </td>
                    <td><?php esc_html_e('13','blackcart'); ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Templates', 'blackcart' ); ?>
                    </td>
                    <td><?php esc_html_e('15','blackcart'); ?></span>
                    </td>
                    <td><?php esc_html_e('17','blackcart'); ?></span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <?php esc_html_e( 'Patterns', 'blackcart' ); ?>
                    </td>
                    <td><?php esc_html_e('17','blackcart'); ?></span>
                    </td>
                    <td><?php esc_html_e('22','blackcart'); ?></span>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
      <div class="about-us">
        <div class="our-product"><span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
          <h3>
            <?php esc_html_e( 'Love our product?', 'blackcart' ); ?>
          </h3>
          <h4>
            <?php esc_html_e( 'Motivate 5 Star rating', 'blackcart' ); ?>
          </h4>
          <a href="https://wordpress.org/support/theme/blackcart/reviews/?filter=5" class="blackcart-admin-button" target="__blank">
            <?php esc_html_e( 'Rate Us', 'blackcart' ); ?>
          </a>
        </div>
        <div class="our-product">
          <h3>
            <?php esc_html_e( 'Still have any question?', 'blackcart' ); ?>
          </h3>
          <p>
          <?php esc_html_e( 'Don\'t hesitate to ask', 'blackcart' ); ?>
          </p>
          <a href="<?php echo esc_url($support_url); ?>" class="blackcart-admin-button" target="_blank">
            <?php esc_html_e( 'Get Support', 'blackcart' ); ?>
          </a>
        </div>
        <div class="blackcart-buttons">
          <a href="<?php echo esc_url($pro_purchase_url); ?>" class="blackcart-admin-button upgrade-to-pro" rel="noreferrer" target="_blank"><i class="fa fa-paint-brush"></i>
            <?php printf( esc_html( 'Get BlackCart Pro', 'blackcart' ), $theme->Name ); ?>
          </a>
          <a href="<?php echo esc_url($doc_url); ?>" class="blackcart-admin-button premium-button documentation" target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
            <?php esc_html_e( 'Documentation', 'blackcart' ); ?>
          </a>
        </div>
      </div>
    </div>
</div>

<?php }
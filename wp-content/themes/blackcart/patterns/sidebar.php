<?php
 /**
  * Title: Sidebar
  * Slug: blackcart/sidebar
  * Categories: blackcart,pages
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"footer-column","className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar has-footer-column-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"10px","bottom":"10px"}}},"backgroundColor":"background","className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget has-background-background-color has-background" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('About','blackcart');?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about-us.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Maecenas odio lacus, dignissim sollicitudin finibus commodo, rhoncus et ante.', 'blackcart' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"background","className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget has-background-background-color has-background"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Categories','blackcart'); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"background","className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget has-background-background-color has-background"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Recent Post','blackcart');?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true,"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"background","className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget has-background-background-color has-background"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Pages','blackcart');?></h2>
<!-- /wp:heading -->

<!-- wp:page-list {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"background","className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget has-background-background-color has-background"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Tags','blackcart');?></h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"numberOfTags":15} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
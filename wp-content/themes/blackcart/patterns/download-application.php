<?php
/**
* Title: Download Application
* Slug: blackcart/download-application
* Categories: blackcart,featured
*/
$blackcart_images = array(
    BLACKCART_URL . 'assets/images/ios_app.png',
    BLACKCART_URL . 'assets/images/android_app.png',
    BLACKCART_URL . 'assets/images/mobile_apps.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"className":"storemate-slide-up","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group storemate-slide-up" style="padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"radius":"0"},"spacing":{"padding":{"top":"0","bottom":"0","left":"80px","right":"0px"},"blockGap":{"left":"0px"}}},"backgroundColor":"light-shade"} -->
<div class="wp-block-columns are-vertically-aligned-center has-light-shade-background-color has-background" style="border-radius:0;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:20px"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e('Download','blackcart');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Maecenas odio lacus, dignissim sollicitudin finibus commodo, rhoncus et ante.','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":3480,"width":"auto","height":"60px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url($blackcart_images[0]);?>" alt="" class="wp-image-3480" style="width:auto;height:60px"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":3481,"width":"auto","height":"60px","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full is-resized"><a href="#"><img src="<?php echo esc_url($blackcart_images[1]);?>" alt="" class="wp-image-3481" style="width:auto;height:60px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"450px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:450px"><!-- wp:image {"id":3468,"width":"480px","sizeSlug":"full","linkDestination":"none","style":{"color":{}},"className":"storemate-app-image storemate-zoom-in"} -->
<figure class="wp-block-image size-full is-resized storemate-app-image storemate-zoom-in"><img src="<?php echo esc_url($blackcart_images[2]);?>" alt="" class="wp-image-3468" style="width:480px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
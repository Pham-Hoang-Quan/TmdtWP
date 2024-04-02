<?php

/**
 * Title: Main Banner
 * Slug:blackcart/main-banner
 * Categories:blackcart,header,featured
 */
$blackcart_images = array(
    BLACKCART_URL . 'assets/images/banner-img1.png',
    BLACKCART_URL . 'assets/images/banner-img2.png',
    BLACKCART_URL . 'assets/images/banner-img3.png',
    BLACKCART_URL . 'assets/images/banner-img4.png',
    BLACKCART_URL . 'assets/images/banner-img5.png',
    BLACKCART_URL . 'assets/images/header-banner.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:12px;padding-bottom:12px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:column {"width":"60%","backgroundColor":"footer-column","layout":{"type":"default"}} -->
<div class="wp-block-column has-footer-column-background-color has-background" style="flex-basis:60%"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-small","left":"var:preset|spacing|30"}}},"backgroundColor":"surface"} -->
<div class="wp-block-columns has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0;flex-basis:40%"><!-- wp:image {"lightbox":{"enabled":true},"id":280,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blackcart_images[4]); ?>" alt="" class="wp-image-280" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);flex-basis:60%"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary"} -->
<h5 class="wp-block-heading has-text-align-left has-primary-color has-text-color" style="font-style:normal;font-weight:700"><?php esc_html_e('Dream with music','blackcart');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Get latest version with discount upto 25%','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"backgroundColor":"background","style":{"typography":{"fontSize":"11px"},"border":{"width":"0px","style":"none"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:11px"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px"><?php esc_html_e('SHOP NOW','blackcart');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","backgroundColor":"footer-column"} -->
<div class="wp-block-column has-footer-column-background-color has-background" style="flex-basis:40%"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|30"}}},"backgroundColor":"surface"} -->
<div class="wp-block-columns has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);flex-basis:60%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color" style="font-style:normal;font-weight:700"><?php esc_html_e('Drone','blackcart');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><?php esc_html_e('Get flat discount upto 25%','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"backgroundColor":"background","style":{"typography":{"fontSize":"11px"},"border":{"width":"0px","style":"none"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:11px"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" href="#"  style="border-style:none;border-width:0px"><?php esc_html_e('SHOP NOW','blackcart');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);flex-basis:40%"><!-- wp:image {"lightbox":{"enabled":true},"id":276,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url($blackcart_images[3]); ?>" alt="" class="wp-image-276"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"footer-column","className":"link-no-underline"} -->
<div class="wp-block-column link-no-underline has-footer-column-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:20%"><!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|xx-small"}}},"backgroundColor":"primary","textColor":"accent-text","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-center has-accent-text-color has-primary-background-color has-text-color has-background has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-small);padding-top:var(--wp--preset--spacing--xx-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:0"><?php esc_html_e('POPULAR','blackcart');?></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"100"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#" data-type="link" data-id="#"><?php esc_html_e('Womens Fashion','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","textTransform":"capitalize"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('Health &amp; Beauty','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","textTransform":"capitalize"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('Laptop &amp; Computer','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","textTransform":"capitalize"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('Watches &amp; Accessories','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","textTransform":"capitalize"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('Electronic Devices','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","textTransform":"capitalize"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('TV &amp; Home Appliances','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|foreground","style":"solid","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--foreground);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","textTransform":"capitalize"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('Groceries &amp; Pets','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|outline","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","textTransform":"capitalize"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('Sports &amp; Outdoor','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"100"}},"fontSize":"small"} -->
<h6 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:100;text-transform:capitalize"><a href="#"><?php esc_html_e('Home &amp; Lifestyle','blackcart');?></a></h6>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"58%","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"footer-column"} -->
<div class="wp-block-column is-vertically-aligned-top has-footer-column-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium);flex-basis:58%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"100%","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);flex-basis:100%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($blackcart_images[0]); ?>","id":216,"dimRatio":0,"focalPoint":{"x":0.65,"y":0.18},"isDark":false,"style":{"spacing":{"padding":{"bottom":"0"},"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large);padding-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-216" alt="" src="<?php echo esc_url($blackcart_images[0]); ?>" style="object-position:65% 18%" data-object-fit="cover" data-object-position="65% 18%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);flex-basis:100%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:700"><?php esc_html_e('Summer Deals!','blackcart');?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:700"><?php esc_html_e('FLASH','blackcart');?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('SALE !!!','blackcart');?></mark></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Free home delivery','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Donot miss the opportunity. Get "UPTO 50%" off !!','blackcart');?> </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"backgroundColor":"primary","textColor":"foreground","style":{"typography":{"fontSize":"12px"},"spacing":{"padding":{"left":"18px","right":"18px","top":"13px","bottom":"13px"}},"border":{"radius":"0px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"className":"is-style-bk-button-secondary"} -->
<div class="wp-block-button has-custom-font-size is-style-bk-button-secondary" style="font-size:12px"><a class="wp-block-button__link has-foreground-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;padding-top:13px;padding-right:18px;padding-bottom:13px;padding-left:18px"><?php esc_html_e('SHOP NOW','blackcart');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%","backgroundColor":"background"} -->
<div class="wp-block-column has-background-background-color has-background" style="flex-basis:22%"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h6 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700"><?php esc_html_e('Iphone','blackcart');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
<p class="has-text-align-center" style="font-size:12px"><?php esc_html_e('10% off !!','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"backgroundColor":"background","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"2px","bottom":"2px"}},"typography":{"fontSize":"12px"},"border":{"width":"0px","style":"none"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:12px"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px;padding-top:2px;padding-right:var(--wp--preset--spacing--20);padding-bottom:2px;padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('SHOP NOW','blackcart');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"align":"center","lightbox":{"enabled":true},"id":241,"width":"150px","height":"145px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($blackcart_images[1]); ?>" alt="" class="wp-image-241" style="object-fit:cover;width:150px;height:145px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h6 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700"><?php esc_html_e('Tshirt','blackcart');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
<p class="has-text-align-center" style="font-size:12px"><?php esc_html_e('30% off !!','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"backgroundColor":"background","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"2px","bottom":"2px"}},"typography":{"fontSize":"12px"},"border":{"width":"0px","style":"none"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:12px"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px;padding-top:2px;padding-right:var(--wp--preset--spacing--20);padding-bottom:2px;padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('SHOP NOW','blackcart');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"align":"center","lightbox":{"enabled":true},"id":240,"width":"150px","height":"145px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($blackcart_images[2]); ?>" alt="" class="wp-image-240" style="object-fit:cover;width:150px;height:145px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:column {"width":"100%","backgroundColor":"footer-column","layout":{"type":"default"}} -->
<div class="wp-block-column has-footer-column-background-color has-background" style="flex-basis:100%"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-small","left":"0"}}},"backgroundColor":"surface"} -->
<div class="wp-block-columns has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:0"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:75%"><!-- wp:image {"lightbox":{"enabled":false},"id":292,"width":"847px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($blackcart_images[5]); ?>" alt="" class="wp-image-292" style="width:847px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);flex-basis:20%"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary"} -->
<h5 class="wp-block-heading has-text-align-left has-primary-color has-text-color" style="font-style:normal;font-weight:700"><?php esc_html_e('Latest fashion design','blackcart');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Get latest version with discount upto 60%','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:button {"backgroundColor":"background","style":{"typography":{"fontSize":"11px"},"border":{"width":"0px","style":"none"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:11px"><a class="wp-block-button__link has-background-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px"><?php esc_html_e('SHOP NOW','blackcart');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
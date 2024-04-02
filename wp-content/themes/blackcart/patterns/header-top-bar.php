<?php
 /**
  * Title: Header Top Bar
  * Slug: blackcart/header-top-bar
  * Categories: blackcart,header
  */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0;padding-bottom:0"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Seasonal sales for all products – off 50%!','blackcart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"}}},"backgroundColor":"footer-column","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-footer-column-background-color has-background" style="padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"}}},"className":"mobile-aligncenter","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group mobile-aligncenter" style="padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"mobile-aligncenter","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mobile-aligncenter has-white-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"wp-block-phone","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group wp-block-phone"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8088,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|themeblue-and-themeblue"}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-phone.png" alt="" class="wp-image-8088"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e(' +123 456 789','blackcart');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8087,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|themeblue-and-themeblue"}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-envelope.png" alt="" class="wp-image-8087"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><a href="<?php esc_attr_e('mailto:support@example.com','blackcart');?>"><?php esc_html_e('support@example.com','blackcart');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8087,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|themeblue-and-themeblue"}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/icon-location.png" alt="" class="wp-image-8087"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Your Location','blackcart');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mobile-aligncenter","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"20px","left":"20px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:0px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

<!-- wp:social-link {"url":"#","service":"fivehundredpx"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"vk"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","align":"left","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","hasHiddenPrice":true,"priceColor":{"slug":"foreground","color":"#ffffff","name":"Foreground","class":"has-foreground-product-count-color"},"iconColor":{"slug":"foreground","color":"#ffffff","name":"Foreground","class":"has-foreground-product-count-color"},"productCountColor":{"slug":"foreground","color":"#ffffff","name":"Foreground","class":"has-foreground-product-count-color"},"style":{"typography":{"fontSize":"17px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
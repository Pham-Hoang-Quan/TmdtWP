<?php
/**
* Title: Call to Action 1
* Slug: blackcart/call-to-action-1
* Categories: blackcart,featured
*/
$blackcart_images = array(
    BLACKCART_URL . 'assets/images/banner-action.png',
);
?>
<!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-small","left":"0"}}},"backgroundColor":"footer-column"} -->
<div class="wp-block-columns has-footer-column-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"blockGap":"0px","padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"blackcart-animation fadeInLeft","layout":{"inherit":false,"wideSize":"1500px"}} -->
<div class="wp-block-column is-vertically-aligned-center blackcart-animation fadeInLeft" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);flex-basis:25%"><!-- wp:paragraph -->
<p><strong><?php esc_html_e('Holiday Sale','blackcart');?>Holiday Sale</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} -->
<p class="has-primary-color has-text-color has-link-color has-large-font-size"><strong><?php esc_html_e('Save up to 60%','blackcart');?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Make the day special with  discounted products.','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"15px","className":" animated animated-fadeInUp"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer  animated animated-fadeInUp"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"fontSize":"normal"} -->
<div class="wp-block-buttons has-custom-font-size animated animated-fadeInUp has-normal-font-size"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"width":"0px","style":"none"}},"className":"is-style-outline","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#" style="border-style:none;border-width:0px"><?php esc_html_e('SHOP  HOLIDAY SALE','blackcart');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:75%"><!-- wp:cover {"url":"<?php echo esc_url($blackcart_images[0]); ?>","id":292,"dimRatio":0,"focalPoint":{"x":0.61,"y":0.32},"minHeight":300,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"style":{"color":{"duotone":"unset"}}} -->
<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-292" alt="" src="<?php echo esc_url($blackcart_images[0]); ?>" style="object-position:61% 32%" data-object-fit="cover" data-object-position="61% 32%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<?php
 /**
  * Title: Product Collection
  * Slug: blackcart/product-collection
  * Categories: blackcart,frontpage
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Display Collection of Products from Store','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.5"}},"textColor":"foreground"} -->
<h2 class="wp-block-heading has-text-align-left has-foreground-color has-text-color" style="line-height:1.5"><?php esc_html_e('Product Collection !!!','blackcart');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:column {"layout":{"type":"constrained"}} -->
<div class="wp-block-column"><!-- wp:woocommerce/product-collection {"queryId":16,"query":{"perPage":8,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":false}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:woocommerce/product-image {"saleBadgeAlign":"center","imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"is-style-outline","textColor":"primary","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->
<!-- /wp:woocommerce/product-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
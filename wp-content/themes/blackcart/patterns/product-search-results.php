<?php

/**
 * Title:Product Search Results
 * Slug:blackcart/product-search-results
 * Categories: blackcart,template
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|x-large","padding":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:query-title {"type":"search","textAlign":"left","showPrefix":false} /-->

<!-- wp:woocommerce/breadcrumbs {"align":""} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/store-notices {"align":""} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><!-- wp:woocommerce/product-results-count /-->

<!-- wp:woocommerce/catalog-sorting /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"medium"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('No products were found matching your selection.','blackcart');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"Search products…","query":{"post_type":"product"}} /-->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
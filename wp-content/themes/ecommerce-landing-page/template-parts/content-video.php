<?php
/**
 * The template part for displaying post
 *
 * @package Ecommerce Landing Page
 * @subpackage ecommerce-landing-page
 * @since ecommerce-landing-page 1.0
 */
?>

<?php 
  $ecommerce_landing_page_archive_year  = get_the_time('Y'); 
  $ecommerce_landing_page_archive_month = get_the_time('m'); 
  $ecommerce_landing_page_archive_day   = get_the_time('d'); 
?>

<?php
  $ecommerce_landing_page_content = apply_filters( 'the_content', get_the_content() );
  $ecommerce_landing_page_video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $ecommerce_landing_page_content, 'wp-playlist-script' ) ) {
    $ecommerce_landing_page_video = get_media_embedded_in_content( $ecommerce_landing_page_content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box p-3 mb-3 wow zoomIn" data-wow-duration="2s">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the video file.
        if ( ! empty( $ecommerce_landing_page_video ) ) {
          foreach ( $ecommerce_landing_page_video as $ecommerce_landing_page_video_html ) {
            echo '<div class="entry-video">';
              echo $ecommerce_landing_page_video_html;
            echo '</div>';
          }
        };
      };
    ?> 
    <article class="new-text">
      <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'ecommerce_landing_page_toggle_postdate',true) == 1 || get_theme_mod( 'ecommerce_landing_page_toggle_author',true) == 1 || get_theme_mod( 'ecommerce_landing_page_toggle_comments',true) == 1 || get_theme_mod( 'ecommerce_landing_page_toggle_time',true) == 1) { ?>
          <div class="post-info p-2 mb-3">
            <?php if(get_theme_mod('ecommerce_landing_page_toggle_postdate',true)==1){ ?>
              <i class="fas fa-calendar-alt me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $ecommerce_landing_page_archive_year, $ecommerce_landing_page_archive_month, $ecommerce_landing_page_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('ecommerce_landing_page_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('ecommerce_landing_page_meta_field_separator', '|'));?></span> <i class="fas fa-user me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('ecommerce_landing_page_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('ecommerce_landing_page_meta_field_separator', '|'));?></span> <i class="fa fa-comments me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'ecommerce-landing-page'), __('0 Comments', 'ecommerce-landing-page'), __('% Comments', 'ecommerce-landing-page') ); ?></span>
            <?php } ?>

            <?php if(get_theme_mod('ecommerce_landing_page_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('ecommerce_landing_page_meta_field_separator', '|'));?></span> <i class="fas fa-clock me-2"></i> <span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <p class="mb-0">
          <?php $ecommerce_landing_page_theme_lay = get_theme_mod( 'ecommerce_landing_page_excerpt_settings','Excerpt');
          if($ecommerce_landing_page_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($ecommerce_landing_page_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <?php $ecommerce_landing_page_excerpt = get_the_excerpt(); echo esc_html( ecommerce_landing_page_string_limit_words( $ecommerce_landing_page_excerpt, esc_attr(get_theme_mod('ecommerce_landing_page_excerpt_number','30')))); ?><?php echo esc_html(get_theme_mod('ecommerce_landing_page_blog_excerpt_suffix',''));?>
            <?php }?>
          <?php }?>
        </p>
        <?php if( get_theme_mod('ecommerce_landing_page_button_text','Read More') != ''){ ?>
          <div class="more-btn mt-4 mb-4">
            <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('ecommerce_landing_page_button_text',__('Read More','ecommerce-landing-page')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('ecommerce_landing_page_button_text',__('Read More','ecommerce-landing-page')));?></span></a>
          </div>
        <?php } ?>
    </article>
  </div>
</div>
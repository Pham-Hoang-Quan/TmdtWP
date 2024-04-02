<?php 
add_action( 'wp_enqueue_scripts', 'spark_ecommerce_enqueue_styles' );
function spark_ecommerce_enqueue_styles() {
	wp_enqueue_style( 'spark-ecommerce-parent-style', get_template_directory_uri() . '/style.css' ); 
} 

function spark_ecommerce_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'spark_ecommerce_custom_header_args', array(
		'default-text-color'     => '000000',
		'height'             	 => 400,
		'flex-height'            => true,
		'default-image'			=> '',
		'wp-head-callback'       => 'spark_ecommerce_header_style',
	) ) );
	register_default_headers( array(
		'header-bg' => array(
			'url'           => get_theme_file_uri( '/img/bg-img-min.png' ),
			'thumbnail_url' => get_theme_file_uri( '/img/bg-img-min.png' ),
			'description'   => _x( 'Default', 'Default header image', 'spark-ecommerce' )
		),	
	) );

}
add_action( 'after_setup_theme', 'spark_ecommerce_custom_header_setup' );
if ( ! function_exists( 'spark_ecommerce_header_style' ) ) :
	function spark_ecommerce_header_style() {
		$header_text_color = get_header_textcolor();
		$header_image = get_header_image();
		if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ){
			return;
		}
		?>
		<style type="text/css">
			.site-title a,
			.site-description,
			.logofont,
			.site-title,
			.logodescription {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
			<?php if ( ! display_header_text() ) : ?>
				.logofont,
				.logodescription {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
			<?php endif; ?>

			<?php header_image(); ?>"
			<?php
			if ( ! display_header_text() ) :
				?>
				.logofont,
				.site-title,
				p.logodescription{
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
				<?php
			else :
				?>
				.site-title a,
				.site-title,
				.site-description,
				.logodescription {
					color: #<?php echo esc_attr( $header_text_color ); ?>;
				}
			<?php endif; ?>
		</style>
		<?php
	}
endif;



/**
 * Google fonts
 */

function spark_ecommerce_enqueue_assets() {
    // Include the file.
	require_once get_theme_file_path( 'webfont-loader/wptt-webfont-loader.php' );
    // Load the theme stylesheet.
	wp_enqueue_style(
		'spark-ecommerce',
		get_template_directory_uri() . '/style.css',
		array(),
		'1.0'
	);
    // Load the webfont.
	wp_enqueue_style(
		'dm-sans',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&display=swap' ),
		array(),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'spark_ecommerce_enqueue_assets' );
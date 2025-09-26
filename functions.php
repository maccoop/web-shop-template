<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

function main_style() {
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/main.css');
}

add_action( 'init', 'twentytwentyfour_pattern_categories' );
add_action('wp_enqueue_scripts', 'main_style');

register_block_pattern(
    'mythemes/header',
    array(
        'title'       => __( 'My Header', 'textdomain' ),
        'description' => _x( 'Custom header pattern', 'Block pattern', 'textdomain' ),
        'content'     => file_get_contents( __DIR__ . '/patterns/header.php' ),
    )
);

// Shortcode hiển thị mini-account
add_shortcode( 'mini_account', function() {
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        $avatar = get_avatar( $current_user->ID, 32 );
        $account_url = wc_get_page_permalink( 'myaccount' );
        $logout_url  = wp_logout_url( get_permalink() );

        return '<div class="mini-account">
            <a href="' . esc_url( $account_url ) . '" class="mini-account-link">' . $avatar . '</a>
            <div class="mini-account-dropdown">
                <a href="' . esc_url( $account_url ) . '">Tài khoản của tôi</a>
                <a href="' . esc_url( $logout_url ) . '">Đăng xuất</a>
            </div>
        </div>';
    } else {
        return '<div class="mini-account">
			<a href="' . esc_url( wc_get_page_permalink( 'myaccount' ) ) . '" class="mini-account-login">👤 Đăng nhập</a>
		</div>';
    }
});

function mytheme_enqueue_bootstrap() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Bootstrap Icons (nếu cần icon)
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css',
        array(),
        '1.11.1'
    );

    // Bootstrap JS (yêu cầu Popper đi kèm, đã có trong bundle)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array('jquery'), // chỉ cần nếu bạn dùng jQuery
        '5.3.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_bootstrap');

function mytheme_enqueue_fontawesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        array(),
        '5.15.4'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_fontawesome');

// Thêm field "Shop Phone" trong WooCommerce settings
add_filter( 'woocommerce_general_settings', function( $settings ) {
    $updated_settings = [];
    foreach ( $settings as $section ) {
        $updated_settings[] = $section;
        if ( isset( $section['id'] ) && 'general_options' === $section['id'] && 'sectionend' === $section['type'] ) {
            $updated_settings[] = [
                'title'    => __( 'Store Phone', 'mytheme' ),
                'id'       => 'woocommerce_store_phone',
                'type'     => 'text',
                'css'      => 'min-width:300px;',
                'desc'     => __( 'Điền số điện thoại liên hệ của shop.', 'mytheme' ),
                'default'  => '',
            ];
        }
    }
    return $updated_settings;
});


// Thêm field "Shop Mail" trong WooCommerce settings
add_filter( 'woocommerce_general_settings', function( $settings ) {
    $updated_settings = [];
    foreach ( $settings as $section ) {
        $updated_settings[] = $section;
        if ( isset( $section['id'] ) && 'general_options' === $section['id'] && 'sectionend' === $section['type'] ) {
            $updated_settings[] = [
                'title'    => __( 'Store Email', 'mytheme' ),
                'id'       => 'woocommerce_store_email',
                'type'     => 'text',
                'css'      => 'min-width:300px;',
                'desc'     => __( 'Điền mail liên hệ của shop', 'mytheme' ),
                'default'  => '',
            ];
        }
    }
    return $updated_settings;
});


// Thêm field "Shop full name" trong WooCommerce settings
add_filter( 'woocommerce_general_settings', function( $settings ) {
    $updated_settings = [];
    foreach ( $settings as $section ) {
        $updated_settings[] = $section;
        if ( isset( $section['id'] ) && 'general_options' === $section['id'] && 'sectionend' === $section['type'] ) {
            $updated_settings[] = [
                'title'    => __( 'Store Full Name', 'mytheme' ),
                'id'       => 'woocommerce_store_full_name',
                'type'     => 'text',
                'css'      => 'min-width:300px;',
                'desc'     => __( 'Điền tên đầy đủ shop của bạn', 'mytheme' ),
                'default'  => '',
            ];
        }
    }
    return $updated_settings;
});




// Thêm field "facebook" trong WooCommerce settings
add_filter( 'woocommerce_general_settings', function( $settings ) {
    $updated_settings = [];
    foreach ( $settings as $section ) {
        $updated_settings[] = $section;
        if ( isset( $section['id'] ) && 'general_options' === $section['id'] && 'sectionend' === $section['type'] ) {
            $updated_settings[] = [
                'title'    => __( 'Store Facebook link', 'mytheme' ),
                'id'       => 'woocommerce_store_facebook',
                'type'     => 'text',
                'css'      => 'min-width:300px;',
                'desc'     => __( 'Điền link facebook của bạn', 'mytheme' ),
                'default'  => '',
            ];
        }
    }
    return $updated_settings;
});

function mytheme_set_default_logo() {
	$src  = get_stylesheet_directory() . '/img/logo.jpg';
    $dest = wp_upload_dir();
    $target = $dest['path'] . '/logo.jpg'; // copy vào uploads/

    if ( file_exists( $src ) && ! file_exists( $target ) ) {
        copy( $src, $target );
    }

    $filetype = wp_check_filetype( basename( $target ), null );

    $attachment = array(
        'guid'           => $dest['url'] . '/logo.jpg',
        'post_mime_type' => $filetype['type'],
        'post_title'     => 'Site Logo',
        'post_status'    => 'inherit'
    );

    $attach_id = wp_insert_attachment( $attachment, $target );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    $attach_data = wp_generate_attachment_metadata( $attach_id, $target );
    wp_update_attachment_metadata( $attach_id, $attach_data );

    set_theme_mod( 'custom_logo', $attach_id );
}
add_action( 'after_switch_theme', 'mytheme_set_default_logo' );

// Shortcode: [my_product_cats id="15" hide_empty="1"]
add_shortcode( 'my_product_cats', function( $atts ) {
    $atts = shortcode_atts( array(
        'id'         => 0,     // ID category cha, mặc định = 0 (tất cả)
        'hide_empty' => 0,     // 1 = ẩn category rỗng
    ), $atts, 'my_product_cats' );

    $terms = get_terms( array(
        'taxonomy'   => 'product_cat',
        'parent'     => (int) $atts['id'],
        'hide_empty' => (bool) $atts['hide_empty'],
    ) );

	$parent_term = get_term( (int) $atts['id'], 'product_cat' );

	if ( is_wp_error( $parent_term ) ) {
		return '';
	}
	ob_start();
	
	//echo '<div class="wp-block-group navigation-items san-pham-header">';
	echo '<div class="wp-block-group navigation-items san-pham-header">';
	echo '<a href="' . esc_url( get_term_link( $parent_term ) ) . '">'. esc_html( $parent_term->name ) .'</a>';

    if (!( empty( $terms ) || is_wp_error( $terms ) )) {
		echo '<div class="wp-block-group product-list">';
		echo '<ul class="wc-block-product-categories-list">';
		foreach ( $terms as $term ) {
			$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
			$image_url    = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : wc_placeholder_img_src();
			echo '<li class="wc-block-product-categories-list-item">';
			echo '<a href="' . esc_url( get_term_link( $term ) ) . '">' . esc_html( $term->name ) . '</a>';
			echo '</li>';
		}
		echo '</ul>';
		echo '</div>';
	}
    echo '</div>';
    return ob_get_clean();
});

add_shortcode( 'my_product_search', function() {
    ob_start(); ?>
    <div class="header-search">
        <button type="button" class="search-toggle"><i class="bi bi-search"></i></button>
        <form role="search" method="get" class="woocommerce-product-search search-form-hidden" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Tìm sản phẩm..." value="<?php echo get_search_query(); ?>" name="s" />
            <input type="hidden" name="post_type" value="product"/>
			<button type="button" class="search-close"><i class="bi bi-x-lg"></i></button>
        </form>
    </div>
    <?php
    return ob_get_clean();
});

add_action('wp_footer', function() { ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggle = document.querySelector(".header-search .search-toggle");
    const form   = document.querySelector(".header-search form");
	const close  = document.querySelector(".header-search .search-close");

	toggle.addEventListener("click", function() {
		form.classList.add("search-form-active");
	});
	close.addEventListener("click", function() {
		form.classList.remove("search-form-active");
	});
	const badges = document.querySelectorAll('.wc-block-mini-cart__quantity-badge');
    badges.forEach(badge => {
        const svg = badge.querySelector('svg');
        if(svg) svg.remove();
    });
});
</script>
<?php });

add_action("mytheme_enqueue_font_awesome", function () {
    // Font Awesome 6 Free (CDN)
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css',
        array(),
        '6.4.2'
    );
});
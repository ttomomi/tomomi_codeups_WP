<?php 
function enqueue_custom_styles_scripts() {
    // スタイルシート
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'));

    // フォント
    wp_enqueue_style('google-fonts-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP&display=swap');
    wp_enqueue_style('google-fonts-eb-garamond', 'https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;700&display=swap');

    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // Swiperスクリプト
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);

    // カスタムスクリプト
    wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_scripts');

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


//アーカイブの表示件数変更
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('works') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '6' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

// add_action('init', function() {
//     register_post_type('item', [
//         'label' => '取扱商品',
//         'public' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-store',
//         'supports' => ['thumbnail', 'title', 'editor']
//     ]);
// });
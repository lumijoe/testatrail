# wpa002html

# wpa002html

# wpa002html

<?php

/**
 * testatrail functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package testatrail
 */
/*****************************
 * ファイルの読み込み
 ****************************/
// 読み込ませたいファイルを追加
function add_files()
{
    // メインのスタイルstyle.cssを読み込ませるget_stylesheet_uri()
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // トップページのスタイルhome.cssを読み込ませるget_template_directory_uri() . '/assets/scss/pages/home.css', array('main-style'));
    wp_enqueue_style('home-style', get_template_directory_uri() . "./assets/scss/pages/home.css", array('main-style'));
    // trueがbodyのうえ、falseはheadのなかで出力される
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    // js/script.jsを読み込ませる(main-scriptはjQueryの読込後に実行、footerに反映させたいtrue)
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery-cdn'), '1.0.0', true);
}
// 追加したファイルを呼び出す
add_action('wp_enqueue_scripts', 'add_files');




<!--  -->
<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('main-style', get_theme_file_uri('/style.css'), array());
}



パーミッション、プラグイン、
WPエラーログ
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

<!--  -->
https://lkcodetest.sakura.ne.jp/testatrail/
tarailtest
<!--  -->
<?php

/**
 * testatrail functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package testatrail
 */
/*****************************
 * ファイルの読み込み
 ****************************/
// 読み込ませたいファイルを追加
function add_files()
{
    // メインのスタイルstyle.cssを読み込ませるget_stylesheet_uri()
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // 追加したファイルを呼び出す

}
add_action('wp_enqueue_scripts', 'add_files');
<!--  -->
wp_enqueue_style('main-style', get_theme_file_uri('/style.css'), array());
<!--  -->
<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('main-style', get_theme_file_uri('/style.css'), array());
}
<!--  -->
get_template_directory_uri()
<!--  -->
add_filter('body_class', 'add_page_slug_class_name');
function add_page_slug_class_name($classes)
{
  if (is_page()) {
    $page = get_post(get_the_ID());
    $classes[] = $page->post_name;
  }
  return $classes;
}

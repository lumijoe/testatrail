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
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/scss/pages/home.css', array('main-style'));
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', false);
    // contact.phpだけにcontact.cssを読み込ませる
    // if (is_page_template('contact.php')) {
    //     wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/scss/pages/contact.css');
    // }
    // if (is_page_template('confirm.php')) {
    //     wp_enqueue_style('confirm-style', get_template_directory_uri() . '/assets/scss/pages/confirm.css');
    // }
    // if (is_page_template('complete.php')) {
    //     wp_enqueue_style('complete-style', get_template_directory_uri() . '/assets/scss/pages/complete.css');
    // }
    // js/script.jsを読み込ませる(main-scriptはjQueryの読込後に実行、footerに反映させたいtrue)
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery-cdn'), '1.0.0', true);
}
// 追加したファイルを呼び出す
add_action('wp_enqueue_scripts', 'add_files');

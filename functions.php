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

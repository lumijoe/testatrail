<?php


// 読み込ませたいファイルを追加
function my_enqueue_scripts()
{
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('style-name', get_template_directory_uri() . '/assets/scss/pages/home.css', array(), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// ヘッダー・フッターのカスタムメニュー化
register_nav_menus(array(
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ'
));

<?php
// CSSとJavaScriptの読み込み
function enqueue_theme_assets() {
    wp_enqueue_style('ress', get_stylesheet_directory_uri() . '/assets/css/ress.css', array(), null);
    wp_enqueue_style('common', get_stylesheet_directory_uri() . '/assets/css/common.css', array('ress'), null);
    wp_enqueue_style('index', get_stylesheet_directory_uri() . '/assets/css/index.css', array('common'), null);

    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');



// サイドメニューの登録
function register_sidebar_menu() {
    register_sidebar(array(
        'name' => __('Side Menu', 'hamburger-theme'),
        'id' => 'side-menu',
        'description' => __('A custom side menu', 'hamburger-theme'),
        'before_widget' => '<div class="l-side-menu">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="l-menu_title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'register_sidebar_menu');
?>




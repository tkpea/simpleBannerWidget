<?php
/*
Plugin Name: SimpleBannerWidget
Plugin URI: 
Description: バナーのためのウィジットを有効にするプラグイン
Version: 1.0
Author: Takuya Takahashi
Author URI: 
License: GPL2
*/

add_action('widgets_init', function () {
  register_widget('SimpleBannerWidget');
});

//上記のファイルの読み込みに関する記述をまとめた関数を、「wp_enqueue_scripts」アクションにフックさせる。
add_action('admin_enqueue_scripts', function () {
  wp_register_script('simple-banner-widget-script', plugins_url('/js/script.js', __FILE__));
  wp_register_script('simple-banner-widget-SimpleBannerWidget', plugins_url('/js/SimpleBannerWidget.js', __FILE__));
  wp_enqueue_script('simple-banner-widget-script');
  wp_enqueue_script('simple-banner-widget-SimpleBannerWidget');
  wp_enqueue_style('simple-banner-widget_css', plugins_url('css/admin.css', __FILE__), array(), '20141013');
});

if (!class_exists("SimpleBannerWidget")) {
  require_once(plugin_dir_path(__FILE__) . 'classs/simple-banner-widghet.php');
}


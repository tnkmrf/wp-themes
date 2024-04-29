<?php
add_action('wp_enqueue_scripts', 'master_theme_enqueue_styles');
add_theme_support('post-thumbnails');

function master_theme_enqueue_styles(){
    wp_enqueue_style('mt-fonts',esc_url(get_stylesheet_directory_uri()).'/fonts/fonts.css');
    wp_enqueue_style('mt-util',esc_url(get_stylesheet_directory_uri()).'/styles/nav.css');
    wp_enqueue_style('mt-util',esc_url(get_stylesheet_directory_uri()).'/styles/utils.css');
    wp_enqueue_style('mt-posts',esc_url(get_stylesheet_directory_uri()).'/styles/posts.css');
    wp_enqueue_script('tools', esc_url(get_template_directory_uri()).'/scripts/tools.js');

}

function Get_component($slug, array $params = [], $output = true){
    $templates = [];
    $name = (string) $slug;

    if('' !== $name){
        $templates[] = "components/{$slug}.php";
    }

    $templates[] = "{$slug}.php";

    $template = locate_template($templates, false, false);

    if(!$template){
        return;
    }

    if($params){
        foreach($params as $key => $variable){
            $$key = $variable;
        }
    }

    include($template);

}

function mt_menu(){
    register_nav_menu('mt-menu',__('Master Menu'));
}
add_action('init','mt_menu');



?>
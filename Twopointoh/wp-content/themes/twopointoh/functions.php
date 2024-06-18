<?php
add_action('wp_enqueue_scripts', 'master_theme_enqueue_styles');
add_theme_support('post-thumbnails');

function master_theme_enqueue_styles(){
    wp_enqueue_style('mt-fonts',esc_url(get_stylesheet_directory_uri()).'/fonts/fonts.css');
    wp_enqueue_style('mt-nav',esc_url(get_stylesheet_directory_uri()).'/styles/nav.css');
    wp_enqueue_style('mt-footer',esc_url(get_stylesheet_directory_uri()).'/styles/footer.css');
    wp_enqueue_style('mt-util',esc_url(get_stylesheet_directory_uri()).'/styles/utils.css');
    wp_enqueue_style('mt-posts',esc_url(get_stylesheet_directory_uri()).'/styles/posts.css');
    wp_enqueue_style('mt-archive',esc_url(get_stylesheet_directory_uri()).'/styles/archive.css');

    wp_enqueue_script('gsap', esc_url(get_template_directory_uri()).'/scripts/gsap.min.js');
    wp_enqueue_script('scrolltrigger', esc_url(get_template_directory_uri()).'/scripts/scrolltrigger.min.js');
    wp_enqueue_script('jquery', esc_url(get_template_directory_uri()).'/scripts/jquery.js');
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


function mt_footer(){
    register_nav_menu('mt-footer',__('Footer Menu'));
}
add_action('init','mt_footer');

function allowsvg($mimes){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes','allowsvg');

function fix_svg(){
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img{
        width: 100% !important;
        height: auto !important;
        }

        </style>';
}
add_action( 'admin_head', 'fix_svg');

?>
<?php 
/**
 * Template Name: Posts Archive
 * 
 *
 */


?>

<?php
$all_article_args = array(
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'order'         => 'desc',
    'order_by'      =>'date',
);

$all_articles = new WP_Query( $all_article_args);



get_header();
?>
<div class="archive-page">
    <div class="normal-width">
    <h1><?php esc_html_e(get_the_title())?></h1>
    <div class="archive-intro">
        <?php echo wp_kses_post( get_field('archive_intro'));?>
    </div>
    <div class="posts-grid">
   
    <?php
    foreach ($all_articles -> posts as $article):
        $category = get_the_category($article);
        $category_name = $category[0]->name;
        $main_colour = get_field('post_main_colour',$article);
        ?>
        <a class ="archive-post-link" href="<?php echo esc_url(get_the_permalink( $article))?>">
            <div class="thumb-container">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url( $article));?>" alt="">
    
            </div>
            <div class="thumb-info">  
                <div class="thumb-name"><?php esc_html_e(get_the_title( $article))?></div>
                <p class="thumb-category"><?php esc_html_e($category_name)?></p>
            </div>
   
        </a>
        <?php
    endforeach;
    ?>
    </div>
  
    </div>
</div>

<?php

get_footer();
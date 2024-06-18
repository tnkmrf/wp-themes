<?php 
/**
 * 
 * 
 * @package Theme
 */


?>

<?php

get_header();
?>
<div class="archive-page">
    <div class="normal-width">
    <h1><?php echo esc_html('Work')?></h1>
    <div>
        <?php echo wp_kses_post( get_field('archive_intro'));?>
    </div>
    <div class="posts-grid">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>
        <a class ="archive-post-link" href="<?php echo esc_url(get_the_permalink())?>">
            <div class="thumb-container">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url());?>" alt="">
            </div>
            <div class="thumb-name"><?php esc_html_e(get_the_title())?></div>
        </a>
        <?php
        endwhile;
    endif;
    ?>
    </div>
  
    </div>
</div>

<?php

get_footer();
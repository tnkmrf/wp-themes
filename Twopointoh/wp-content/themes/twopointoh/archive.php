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

<div class="normal-width">
<h1>Archive</h1>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
    <a href="<?php echo esc_url(get_the_permalink())?>"><?php esc_html_e(get_the_title())?></a>
    <?php
    endwhile;
endif;
?>
</div>
<?php

get_footer();
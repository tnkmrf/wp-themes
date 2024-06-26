<?php
/**
 * 
 * 
 * @package Theme
 */


?>

<?php

get_header();

while (have_posts()):
    the_post();
    $title = get_the_title();
    $category = get_the_category();
    $category_name = $category[0]->name;
    $category_link = get_category_link($category);
    $thumbnail = get_the_post_thumbnail_url();
    
    ?>
    <article>
    <div class ="post-header">
        <div class="post-details ">
            <h1 onclick="myFunction()"><?php esc_html_e($title)?></h1>
            <a class ="category-link" href = "<?php echo esc_url($category_link)?>"><?php esc_html_e($category_name)?></a>
        </div>
        <?php
        if(!empty($thumbnail)){
            ?>
        <div class="post-thumb">
                <img src="<?php echo esc_url($thumbnail)?>" alt="">
        </div>
        <?php
        };?>
    </div>
   

    <div class="post-content normal-width">
        <?php echo wp_kses_post( get_the_content());?>  
    </div>

    </article>
<?php
endwhile;
get_footer();
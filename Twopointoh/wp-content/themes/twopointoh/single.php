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
    $main_colour = get_field('post_main_colour');
    
    ?>
    <article>
    <div class ="post-header" style="background:<?php echo esc_html($main_colour)?>">
        <div class="post-details ">
            <a class ="category-link" href = "<?php echo esc_url($category_link)?>"><?php esc_html_e($category_name)?></a>
            <h1 onclick="myFunction()"><?php esc_html_e($title)?></h1>
            <div class="post-excerpt">
            <?php echo wp_kses_post( get_the_excerpt());?>
            </div>
            <?php if (!empty(get_the_tag_list())){
            ?>
            <div class="post-tags">
             
                <?php echo get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>') ?>
            </div>
            <?php
            };
            ?>
            
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
   

    <div class="post-content">

        <div class="post">
        <?php echo wp_kses_post( get_the_content());?>  
        </div>
        
    </div>



    </article>
<?php
endwhile;
get_footer();
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
          
            <h1 onclick="myFunction()"><?php esc_html_e($title)?></h1>
            <a class ="category-link" href = "<?php echo esc_url($category_link)?>"><?php esc_html_e($category_name)?></a>
          
            <?php if (!empty(get_the_tag_list())){
            ?>
       
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
    <div class="excerpt-container">
        <div class="post-excerpt">
                <?php echo wp_kses_post( get_the_excerpt());?>
        </div>
    </div>


    <div class="post-content">

        <div class="post">
        <?php echo wp_kses_post( get_the_content());?>  
      
        </div>
       
    </div>


<?php
    $rec_article_args = array(
        'post_type'     => 'post',
        'post_status'   => 'publish',
        'order'         => 'desc',
        'order_by'      =>  'date',
        'category_name' => $category_name,
       // 'post__not_in'  => [get_the_ID()]
    );

$rec_articles = new WP_Query( $rec_article_args);
if($rec_articles){
    ?>

<div class="rec-slider">
    <div class="normal-width">
    <h2>Related work</h2>
    </div>

<div class="recSwiper">
        <div class="swiper-wrapper">
        <?php
        foreach ($rec_articles -> posts as $article):
        $category = get_the_category($article);
        $category_name = $category[0]->name;
        $main_colour = get_field('post_main_colour',$article);
        ?>
        <a class ="swiper-slide" href="<?php echo esc_url(get_the_permalink( $article))?>" style="background:<?php echo esc_html($main_colour)?>">
            <div class="rel-thumb-container">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url( $article));?>" alt="">
            </div> 
            <div class="rec-thumb-name"><?php esc_html_e(get_the_title( $article))?></div>
        </a>
        <?php
        endforeach;
    }
        ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="rec-swiper-pagination"></div>
    </div>

    </div>
    </article>

 
<?php
endwhile;

get_footer();
?>

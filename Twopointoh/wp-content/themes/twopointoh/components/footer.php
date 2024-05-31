<?php
$menu = wp_get_nav_menu_object("Menu 1" );
$footer = wp_get_nav_menu_object("Footer Menu");
$contact_link = get_field('contact_link',$menu);
$privacy_link = get_field('privacy_policy',$footer);
$terms_link = get_field('terms_&_conditions',$footer);

?>

<footer>
    <div class="footer-container">
        <div class="footer-content normal-width">
                <div class="footer-logo">
                <a class = "foot-logo" href ="<?php echo get_home_url()?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri()); ?>/resources/img/icons/logo-full.svg" alt="logo"></a>
                </div>

            <div class="footer-objects">
            <div class="footer-nav">
                <h4 class="footer-heading">Studio</h4>
                <div class="footer-nav-items">
                <?php
                wp_nav_menu(

                array(
                    'theme_location' => 'mt-footer'
                )

                );


                ?>
                </div>
            </div>
            <div class="footer-legal">
                <h4 class="footer-heading">Legal</h4>
                <ul>
                    <li><a href="<?php echo esc_html($privacy_link['url'])?>"><?php echo esc_html($privacy_link['title'])?></a></li>
                    <li><a href="<?php echo esc_html($terms_link['url'])?>"><?php echo esc_html($terms_link['title'])?></a></li>
                </ul>
            </div>
            </div>
         
        </div>
    
    </div>
</footer>
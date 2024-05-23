<?php
$menu = wp_get_nav_menu_object("Menu 1" );
$contact_link = get_field('contact_link',$menu);

?>

<footer>
    <div class="footer-container">
        <div class="footer-content normal-width">
            <div class="footer-cta">
                <a href="<?php echo esc_html($contact_link['url'])?>"><?php echo esc_html($contact_link['title'])?><span><img src="<?php echo get_template_directory_uri()?>/resources/img/icons/arrow-right-footer.svg" alt="logo"></span></a>
            </div>
        </div>
    </div>
</footer>
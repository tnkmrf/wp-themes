<?php
    $menu = wp_get_nav_menu_object("Menu 1" );
    $contact_link = get_field('contact_link',$menu);
    $nav_logo = get_field('nav_logo',$menu);
?>

<header>
    <div class="nav-container">
        <nav>
            <a class = "nav-logo" href ="<?php echo get_home_url()?>"><img src="<?php echo esc_url($nav_logo)?>" alt="logo"></a>
            <div class = "nav-collapse">
               <?php
               wp_nav_menu(

                array(
                    'theme_location' => 'mt-menu'
                )

                );
              
            
               ?>

               <a class = "contact-btn" href="<?php echo esc_url($contact_link['url']) ?>"><?php echo esc_html($contact_link['title']) ?><span><img src="<?php echo get_template_directory_uri()?>/resources/img/icons/arrow-right.svg" alt="logo"></span></a>
            </div>
         
            <div id ="toggler" onclick="displayNav()" class="nav-toggle">   
            </div>
        </nav>
    </div>
    <div id ="nav-collapse-mobi" class="nav-collapse-mobi">
            <?php
               wp_nav_menu(

                array(
                    'theme_location' => 'mt-menu'
                )

                );
               ?>
                <a class = "contact-btn" href="<?php echo esc_url($contact_link['url']) ?>"><?php echo esc_html($contact_link['title']) ?><span><img src="<?php echo get_template_directory_uri()?>/resources/img/icons/arrow-right.svg" alt="logo"></span></a>
    </div>

</header>
<header>
    <div class="nav-container">
        <nav>
            <a class = "nav-logo" href ="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/resources/img/icons/altlogo.svg" alt="logo"></a>
            <div class = "nav-collapse">
               <?php
               wp_nav_menu(

                array(
                    'theme_location' => 'mt-menu'
                )

                );
               ?>

            <a class = "contact-btn" href="">Contact</a>
            </div>
            
        </nav>
    </div>

</header>
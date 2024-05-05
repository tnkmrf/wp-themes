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
    </div>

</header>
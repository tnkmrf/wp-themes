<header>
    <div class="nav-container">
        <nav>
            <div class = "nav-logo"><img src="" alt="logo"></div>
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
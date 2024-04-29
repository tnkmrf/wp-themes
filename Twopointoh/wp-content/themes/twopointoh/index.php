<?php
/**
 * 

 * 
 */

get_header();
echo wp_kses_post(get_the_content());

get_footer();
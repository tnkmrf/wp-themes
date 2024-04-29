<?php 
/**
 * 
 * @category Theme
 * @package Theme
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta itemprop="name" content="<?php bloginfo("name");?>"/> 
    <meta itemprop="url" content="<?php echo esc_url( home_url('/'));?>"/> 
<?php wp_head();?>
</head>
<body>
    <?php
   get_component('header');
   ?>
<main>
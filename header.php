<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
     <?php wp_head(); ?>
</head>
<body>
   <!-- nav -->
   <nav class="container">
       <a href="<?php echo esc_url(home_url()); ?>" class="logo"><?php bloginfo('name'); ?></a>
       <?php 
            $args = array(
                'theme_location' => 'primary'
            ); 
       ?>
       <?php wp_nav_menu(); ?>
        
         <?php echo get_search_form(); ?>
   </nav>
<?php get_header(); ?>
     <!-- header -->
     <header class="container">
         <h1><?php the_field('header_glavni_naslov'); ?></h1>
         <h3><?php the_field('podnaslov_u_headeru'); ?></h3>
     </header>
      <!-- postovi -->
      <section class="home container">
        <h2><?php the_field('home_container_h2_naslov'); ?></h2>
        <h4><?php the_field('home_container_h4_naslov'); ?></h4>
        <hr>
        <p><?php the_field('home_container_paragraf'); ?></p>
        <img src="<?php the_field('home_slika'); ?>" alt="">
        
          
    </section>
    <?php get_footer(); ?>
   
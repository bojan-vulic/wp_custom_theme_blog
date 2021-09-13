<?php get_header(); ?>
    
     
        <!-- posts -->
      <section class="container single">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <article>
              <div class="featured-image">
                  <?php the_post_thumbnail(); ?>
              </div>
              
              <div class="text">
              <h3><?php the_title(); ?></h3>
              <div class="meta"><a href=""><?php the_author(); ?></a> | <a href=""><?php the_date(); ?></a></div>
              <hr>
              <?php the_content(); ?>
              
              </div>
          </article>
          <?php endwhile; else : ?>
          <?php echo('Nema unetih blog postova'); ?>
          <?php endif; ?>
         
       <?php get_sidebar(); ?>
           
    
    </section>
    <?php get_footer(); ?>
   
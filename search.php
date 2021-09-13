<?php get_header(); ?>
     
     
      <!-- postovi -->
      <section class="posts container rightSidebar">
        
         <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <article>
              <div class="featured-image">
                  <?php the_post_thumbnail(); ?>
              </div>
              
              <div class="text">
              <h3><?php the_title(); ?></h3>
              <div class="meta"><a href=""><?php the_author(); ?></a> | <a href=""><?php the_date(); ?></a></div>
              <hr>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="btn">
                  <?php echo('Ceo tekst'); ?>
              </a>
              </div>
          </article>
          <?php endwhile; else : ?>
          <?php echo('Nema unetih blog postova'); ?>
          <?php endif; ?>
          
           <?php get_sidebar(); ?>

          
    </section>
    <?php get_footer(); ?>
   
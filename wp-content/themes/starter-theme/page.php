<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            
          <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    
                      <h2><?php the_title(); ?></h2>
                      <?php the_content();    
                }
            }
          ?>
            
        </div>
    </section>
</main>

<?php get_footer(); ?>
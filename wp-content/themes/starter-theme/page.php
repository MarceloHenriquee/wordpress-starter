<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            
          <?php
            if(have_posts()){
               while(have_posts()) {the_post(); ?>
                    
                 <div class="container">
                    <div class="row">
                      <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                      <?php the_post_thumbnail(); ?> 
                      </div>
                      <div class="col">
                        <?php the_content(); ?>
                      </div>
                    </div>
                   </div>  
              <?php               
                }
            }
          ?>
            
        </div>
    </section>
</main>

<?php get_footer(); 
<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            
          <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    
                      <h2><?php the_title(); ?></h2>
                      <a href="<?= get_the_permalink($post->ID); ?>">Ler</a>
                      
                      <hr />
                  <?php    
                }
            }
          ?>
            
        </div>
    </section>
</main>

<?php get_footer(); ?>
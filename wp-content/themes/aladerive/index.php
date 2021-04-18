<?php get_header(); ?>


        <main class="col-lg-9">

            <?php
            
              if (have_posts()) {

                  while (have_posts()) {
                      the_post();
                      get_template_part('template-parts/postlist');
                  }
                  get_template_part('template-parts/nav-articles');
              }
             else{
                 get_template_part('template-parts/nopost');
             }
            ?>

        </main>
        <?php get_template_part('template-parts/sidebar'); ?>


<?php get_footer(); ?>
<?php get_header(); ?>


<main class="col-lg-9">

  <?php if (have_posts()): ?>

    <?php 
      the_post();
      get_template_part('template-parts/singlepost'); ?>
    
    <?php else: ?>

      <?php get_template_part('template-parts/nopost'); ?>

    <?php endif ; ?>

</main>

<?php get_template_part('template-parts/sidebar'); ?>

<?php get_footer(); ?>
<?php

/** 
 *  Template Name: Page basique
 */

 ?>

<?php get_header(); ?>

    <main class="col-lg-12">

        <article class="card">
            <div class="card-body">
            <h2 class="card-title"><?php the_title();?></h2>
            <p class="card-text"><?php the_content(); ?></p>
            </div>
        </article>
        
    </main>

<?php get_footer(); ?>
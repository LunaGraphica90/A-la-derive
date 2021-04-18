<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<main class="col-lg-12">

    <article class="card">
        <div class="card-body">
        <h2 class="card-title">404 !</h2>

        <p class='card-text'>
            Désolé, cette page n'existe pas... 
            <img  src="<?= get_template_directory_uri() ?>/assets/images/404.png" alt="404 !">
        </p>
        <a href="<?= get_home_url();?>"><i class="fas fa-arrow-alt-circle-right"></i> Revenir à la page d'accueil ?</a>
        <br>
        <br>
        <p class='card-text'>
            ou effectuer une recherche sur le site ?
        </p>
        <?php get_search_form(); ?>
        </div>
    </article>    

</main>

<?php
get_footer();
<article class="card">
    <div class="card-body">
    <h2 class="card-title">Oupps !</h2>

    <p class='card-text'>
        Il semble que cette page ne contient pas encore d'article ! 
        <img  src="<?= get_template_directory_uri() ?>/assets/images/oups.png" alt="oups !">
    </p>
    <a href="<?= get_home_url();?>">Revenir à la page d'accueil ?</a>
    <br>
    <br>
    <p class='card-text'>
        ou effectuer une recherche sur le site ?
    </p>
    <?php get_search_form(); ?>
    </div>
</article>
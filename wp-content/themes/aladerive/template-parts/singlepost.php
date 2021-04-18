<?php
$categories = get_the_category();
//var_dump($categories);
?>

<article class="card">
    <div class="card-body">
    <h2 class="card-title"><?php the_title();?></h2>
    <p class="infos">
        Posté par <?php the_author_posts_link(); ?>
        le <time><?php the_date(); ?></time> 
        dans 
            <?php foreach($categories as $category){
                echo '<a href=" ' . get_category_link($category->term_id) .' " class= "card-link"> #'. $category->name . '</a>';
            }?>
    </p>
    <div class="card-text" ><?php the_content(); ?></div>
    </div>
</article>
<ul class="pagination justify-content-between">
    <li class="page-item"><a class="page-link" href="<?= get_home_url();?>"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a></li>
</ul>





<?php
$categories = get_the_category();
//var_dump($categories);
?>

<article class="card">
    <div class="card-body">
    <h2 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <div class="card-text" ><?php the_excerpt(); ?></div>
    <p class="infos">
        Posté par <?php the_author_posts_link(); ?> 
        le <time><?php the_date(); ?></time> 
        dans 
            <?php foreach($categories as $category){
                echo '<a href=" ' . get_category_link($category->term_id) .' " class= "card-link"> #'. $category->name . '</a>';
            }?>
    </p>
    </div>
</article>





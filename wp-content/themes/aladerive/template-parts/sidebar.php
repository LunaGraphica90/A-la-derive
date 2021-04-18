<aside class="col-lg-3">
    <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
    <?php get_search_form(); ?>


    <div class="card">
        <h3 class="card-header">Catégories</h3>
        <?php
        $menuCategories = wp_nav_menu([
            'menu' => 'Categories',
            'echo' => true,
            'items_wrap' => '<ul class="list-group list-group-flush %2$s">%3$s</ul>',
            'list_item_class'=> 'list-group-item',
            ]);
        ?>
    </div>

    <div class="card">
        <h3 class="card-header">Auteurs</h3>
        <ul class="list-group list-group-flush">
            <?php
            $authors = get_users('role=author');
            
            foreach($authors as $author){
                echo '<li class="list-group-item"><a href=" '.get_author_posts_url($author->ID). '">' . $author->display_name . '</a></li>' ;
            }
            ?>
            </li>
        </ul>
    </div>

</aside>
<?php //var_dump($authors); ?>

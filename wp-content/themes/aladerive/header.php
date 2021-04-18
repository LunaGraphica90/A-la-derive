<!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo wp_get_document_title(); ?></title>
        <?php wp_head(); ?>

    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?= get_home_url();?>">À la dérive</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                Menu <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                $menu = wp_nav_menu([
                    'menu' => 'Catégories',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'echo' => true,
                    'items_wrap' => '<ul class="navbar-nav %2$s">%3$s</ul>',
                    'link_class' => 'nav-link',
                    ]);
                ?>
            </nav>

            <section class="text-center">
                <h1>À la dérive</h1>
                <hr />
                <p>Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace</p>
            </section>
        </header>

        <div class="container">
            <div class="row">


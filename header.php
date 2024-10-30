<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-black text-white'); ?>>
    <header class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container">
                <!-- Logo or Site Name -->
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>

                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Primary Menu -->
                <div class="collapse navbar-collapse" id="navbarNav">
                <?php 
                    if ( has_nav_menu( 'primary-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_class'     => 'navbar-nav ms-auto', 
                            'container'      => 'div',
                            'container_class'=> 'collapse navbar-collapse', 
                            'container_id'   => 'navbarNav', 
                            'fallback_cb'    => '__return_false',
                            'depth'          => 2,
                        ) );
                    }
                    ?>

                </div>
            </div>
        </nav>
    </header>
    <?php wp_footer(); ?>
</body>
</html>

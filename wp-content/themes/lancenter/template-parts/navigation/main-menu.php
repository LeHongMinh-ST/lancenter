<?php
    wp_nav_menu([
        'theme_location' => 'menu-header',
        'menu_id' => 'menu-header',
        'menu_class' => 'main-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ms-auto">%3$s</ul>',
    ])
?>
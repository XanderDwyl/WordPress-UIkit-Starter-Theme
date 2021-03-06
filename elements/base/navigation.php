<?php
/**
 * element for navigation and offcanvas navigation
 */

$nav_left = wp_nav_menu(array(
    'theme_location' => 'main-left',
    'menu_class'     => 'uk-navbar-nav uk-hidden-small',
    'depth'          => 2,
    'walker'         => new WordpressUikitMenuWalker('navbar'),
    'echo'           => false,
    'fallback_cb'    => false
));

$nav_right = wp_nav_menu(array(
    'theme_location' => 'main-right',
    'menu_class'     => 'uk-navbar-nav uk-hidden-small',
    'depth'          => 2,
    'walker'         => new WordpressUikitMenuWalker('navbar'),
    'echo'           => false,
    'fallback_cb'    => false
));

$nav_offcanvas = wp_nav_menu(array(
    'theme_location' => 'main-left',
    'menu_class'     => 'uk-nav uk-nav-offcanvas',
    'depth'          => 2,
    'walker'         => new WordpressUikitMenuWalker('navbar'),
    'echo'           => false,
    'fallback_cb'    => false
));
?>
<?php if ($nav_left || $nav_right) : ?>
    <nav id="navbar-left" class="uk-navbar">
        <div class="uk-container uk-container-center">
            <?= $nav_left ?>
            <?= $nav_right ?>
            <a href="#offcanvas-menu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        </div>
    </nav>
    <div id="offcanvas-menu" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <?= $nav_offcanvas ?>
        </div>
    </div>
<?php endif; ?>


<?php
/**
 * element for navigation and offcanvas navigation
 */

$nav_left = wp_nav_menu(array(
    'theme_location' => 'main-left',
    'menu_class'     => 'uk-navbar-nav uk-hidden-small uk-float-right',
    'depth'          => 2,
    'walker'         => new WordpressUikitMenuWalker('navbar'),
    'echo'           => false,
    'fallback_cb'    => false
));

$nav_right = wp_nav_menu(array(
    'theme_location' => 'main-right',
    'menu_class'     => 'uk-navbar-nav uk-hidden-small uk-float-left',
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

/**
 * element for header
 */

$header_style = '';
if ($headerImageUrl = get_header_image()) {
    $header_style = 'style="height: 180px; background-image: url(' . $headerImageUrl . ');"';
}

$text_style = '';
if ($color = get_header_textcolor()) {
    $text_style = 'style="color: #' . $color . ';"';
}


?>
<?php if ($nav_left || $nav_right) : ?>
    <nav id="navbar" class="uk-navbar">
        <div class="uk-grid">
            <div class="uk-width-4-10 uk-panel uk-panel-box uk-container-center"><?= $nav_left ?></div>
            <div class="uk-width-2-10 uk-panel uk-panel-box uk-container-center uk-text-center">
                <div class="site-logo" id="site-logo">
                    <a href="<?= esc_url(home_url('/')); ?>"
                    title="<?= esc_attr(get_bloginfo('name', 'display')); ?>"
                    class="uk-link-reset">
                        <img src="<?php echo( get_header_image() ); ?>" title="<?php bloginfo('name'); ?>"/>
                    </a>
                </div>
            </div>
            <div class="uk-width-4-10 uk-panel uk-panel-box uk-container-center"><?= $nav_right ?></div>
        </div>
        <div class="uk-container uk-container-center">
            <a href="#offcanvas-menu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        </div>
    </nav>
    <div id="offcanvas-menu" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <?= $nav_offcanvas ?>
        </div>
    </div>
<?php endif; ?>

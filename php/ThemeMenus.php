<?php

/**
 * Manages all menu-related modifications.
 */
class ThemeMenus
{

    public function __construct()
    {
        // register menus
        register_nav_menu('main-canvas', 'Main Menu Canvas');
        register_nav_menu('main-left', 'Main Menu Left');
        register_nav_menu('main-right', 'Main Menu Right');
        register_nav_menu('footer', 'Footer Menu');
    }
}

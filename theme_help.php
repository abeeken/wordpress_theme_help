<?php
/**
 * fns/theme_help.php
 * Help page with tips on how the theme works with regards widget areas etc.
 */

// === Create the menu
function add_theme_help()
{
    add_menu_page('Theme Help', 'Theme Help', 'manage_options', 'theme-help', 'theme_help');
}

add_action('admin_menu', 'add_theme_help');

function theme_help(){
    ?>
    <div class="wrap">
        <h2>Theme Help</h2>
        <p>Some helpful information for managing the widgets and content in the Theme.</p>
    </div>
    <?php
}

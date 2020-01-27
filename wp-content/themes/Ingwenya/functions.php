<?php
function load_stylesheets() {
    wp_register_style("mainstyles", get_template_directory_uri() . "/styles/main-styles.css", array(), 1, "all" );
    wp_enqueue_style("mainstyles");
    if(is_front_page()) {
        wp_register_style("frontstyles", get_template_directory_uri() . "/styles/front-page.css", array(), 1, "all" );
        wp_enqueue_style("frontstyles");
    }
    if(is_page("contact")) {
        wp_register_style("contactstyles", get_template_directory_uri() . "/styles/contact.css", array(), 1, "all" );
        wp_enqueue_style("contactstyles");
    }
    if(is_page("media")) {
        wp_register_style("mediastyles", get_template_directory_uri() . "/styles/media.css", array(), 1, "all" );
        wp_enqueue_style("mediastyles");
    }
    if(is_page("operations")) {
        wp_register_style("operationstyles", get_template_directory_uri() . "/styles/operations.css", array(), 1, "all" );
        wp_enqueue_style("operationstyles");
    }
    if(is_page("services")) {
        wp_register_style("servicestyles", get_template_directory_uri() . "/styles/services.css", array(), 1, "all" );
        wp_enqueue_style("servicestyles");
    }
    if(is_page("about")) {
        wp_register_style("aboutstyles", get_template_directory_uri() . "/styles/about.css", array(), 1, "all" );
        wp_enqueue_style("aboutstyles");
    }
        if(is_page("strategy")) {
        wp_register_style("strategystyles", get_template_directory_uri() . "/styles/strategy.css", array(), 1, "all" );
        wp_enqueue_style("strategystyles");
    }
    if(is_page_template("product.php")) {
        wp_register_style("singleproductstyles", get_template_directory_uri() . "/styles/product.css", array(), 1, "all" );
        wp_enqueue_style("singleproductstyles");
    }
    if(is_single()) {
        wp_register_style("singlestyles", get_template_directory_uri() . "/styles/single.css", array(), 1, "all" );
        wp_enqueue_style("singlestyles");
    }
    if(is_page("sustainability")) {
        wp_register_style("sustainabilitystyles", get_template_directory_uri() . "/styles/sustainability.css", array(), 1, "all" );
        wp_enqueue_style("sustainabilitystyles");
    }
    if(is_page("bomax-engineering")) {
        wp_register_style("bomax-engineeringstyles", get_template_directory_uri() . "/styles/bomax-engineering.css", array(), 1, "all" );
        wp_enqueue_style("bomax-engineeringstyles");
    }
}
function load_scripts() {
    wp_register_script("mainscripts", get_template_directory_uri() . "/scripts/main-scripts.js", array(), 1, true);
    wp_enqueue_script("mainscripts");
    if(is_front_page()) {
        wp_register_script("frontscripts", get_template_directory_uri() . "/scripts/front-page.js", array(), 1, true);
        wp_enqueue_script("frontscripts");
    }
    if(is_page("contact")) {
        wp_register_script("contactscript", get_template_directory_uri() . "/scripts/contact.js", array(), 1, true );
        wp_enqueue_script("contactscript");
    }
    if(is_page("media")) {
        wp_register_script("mediascript", get_template_directory_uri() . "/scripts/media.js", array(), 1, true );
        wp_enqueue_script("mediascript");
    }
    if(is_page("operations")) {
        wp_register_script("operationscript", get_template_directory_uri() . "/scripts/operations.js", array(), 1, true );
        wp_enqueue_script("operationscript");
    }
    if(is_page("services")) {
        wp_register_script("servicescript", get_template_directory_uri() . "/scripts/services.js", array(), 1, true );
        wp_enqueue_script("servicescript");
    }
    if(is_page("about")) {
        wp_register_script("aboutscript", get_template_directory_uri() . "/scripts/about.js", array(), 1, true );
        wp_enqueue_script("aboutscript");
    }
    if(is_page_template("product.php")) {
        wp_register_script("singleproductscript", get_template_directory_uri() . "/scripts/product.js", array(), 1, true );
        wp_enqueue_script("singleproductscript");
    }
    if(is_page("bomax-engineering")) {
        wp_register_script("bomax-engineeringscript", get_template_directory_uri() . "/scripts/bomax-engineering.js", array(), 1, true );
        wp_enqueue_script("bomax-engineeringscript");
    }
}

register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    )
);

add_action("wp_enqueue_scripts", "load_scripts");
add_action("wp_enqueue_scripts", "load_stylesheets");
add_theme_support( 'post-thumbnails' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>
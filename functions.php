<?php

add_theme_support("post-thumbnails");

function my_script()
{
    wp_enqueue_script(
        "myscript",
        get_template_directory_uri() . "/main.js",
        array(),
        false,
        true
    );
}
add_action("wp_enqueue_scripts", "my_script");

register_nav_menus(array(
    "global" => "グローバル",
    "sidebar" => "サイドバー"
));

function post_has_archive($args, $post_type)
{
    if ("post" == $post_type) {
        $args["rewrite"] = true;
        $args["has_archive"] = "posts";
    }
    return $args;
};
add_filter("register_post_type_args", "post_has_archive", 10, 2);

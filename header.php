<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1><a href="<?php echo home_url(); ?>">808 café</a></h1>
        <?php
        wp_nav_menu(array(
            "theme_location" => "global",
        ));
        ?>
        <nav>
            <ul>
                <li><?php echo "header.php" ?></li>
            </ul>
        </nav>
        <div id="sp-menu">
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
        </div>
        <div class="over-760"><?php get_footer(); ?></div>
    </header>
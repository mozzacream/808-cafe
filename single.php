<div class="wrapper">
    <?php get_header(); ?>
    <main>
        <div class="container">
            <?php echo "This is the single php" ?>
            <ul class="info-list">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <li>
                            <h3><?php the_title(); ?></h3>
                            <time datetime="<?php echo get_the_date("Y-m-d"); ?>">最終更新日: <?php echo get_the_date("Y年m月d日"); ?></time>
                            <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);"></div>
                            <div class="content">
                                <p><?php the_content(); ?></p>
                            </div>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
        <img class="background-img" src="<?php echo get_template_directory_uri(); ?>/img/img02.jpg" alt="808_cafe">
    </main>
    <?php // get_sidebar(); 
    ?>
</div>
<?php get_footer(); ?>
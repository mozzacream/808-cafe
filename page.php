<div class="wrapper">
    <?php get_header(); ?>
    <main>
        <div class="container">
            <section>
                <?php echo "This is the page php" ?>
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <!-- <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);"></div> -->
                        <div class="text-line">
                            <span class="lines before"></span>
                            <h2><?php the_title(); ?></h2>
                            <span class="lines after"></span>
                        </div>
                        <div class="contetnt">
                            <p><?php the_content(); ?></p>
                        </div>
                <?php endwhile;
                endif; ?>
            </section>
        </div>
        <img class="background-img" src="<?php echo get_template_directory_uri(); ?>/img/img02.jpg" alt="808_cafe">
    </main>
    <?php // get_sidebar(); 
    ?>
</div>
<!-- <?php get_footer(); ?> -->
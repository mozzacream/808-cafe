<div class="wrapper">
    <?php get_header(); ?>
    <main>
        <div class="container">
            <?php echo "This is the single-news php" ?>
            <h2 class="archive-title">お知らせ</h2>
            <ul class="postlist">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <li><a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <time datetime="<?php echo get_the_date("Y-m-d"); ?>">最終更新日: <?php echo get_the_date("Y年m月d日"); ?></time>
                                <div class="content">
                                    <p><?php the_content(); ?></p>
                                </div>
                            </a></li>
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
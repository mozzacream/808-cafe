<div class="wrapper">
    <?php get_header(); ?>
    <main>
        <div class="container">
            <section class="top">
                <h1>Welcome to 808 café</h1>
                <div class="catchphrase">
                    <h2>Coffee X HipHop</h2>
                </div>
            </section>
            <?php echo "This is the front page php" ?>

            <section class="news">
                <?php $args = array(
                    "post_type" => "news",
                    "posts_per_page" => 3
                );
                $news_query = new WP_Query($args); ?>
                <h2>お知らせ</h2>
                <ul class="news-list">
                    <?php if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <span class="back-space"></span>
                            </li>
                    <?php endwhile;
                    endif; ?>
                </ul>
            </section>

            <section class="recent-posts">
                <h2>新着情報</h2>
                <ul class="postlist">
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                    ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <!-- <div class="thumbnail" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);"></div> -->
                                    <time datetime="<?php echo get_the_date("Y-m-d"); ?>"><?php echo get_the_date("Y/m/d"); ?></time>
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <span class="back-space"></span>
                            </li>
                    <?php endwhile;
                    endif; ?>
                </ul>
            </section>
            <h3>*404ページは<a href="<?php home_url() . "/"; ?>recruitw">こちら</a></h3>
        </div>
        <img class="background-img" src="<?php echo get_template_directory_uri(); ?>/img/img02.jpg" alt="808_cafe">
    </main>
    <?php // get_sidebar(); 
    ?>
</div>
<!-- <?php get_footer(); ?> -->
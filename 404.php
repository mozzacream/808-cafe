<div class="wrapper">
    <?php get_header(); ?>
    <main>
        <div class="container error">
            <?php echo "This is the 404 php" ?>
            <h2 class="h2-404">申し訳ありません。お探しのページは見つかりませんでした。</h2>
            <p>お探しのページは一時的にアクセスできない状況にあるか、移動もしくは削除された可能性があります。</p>
            <a href="<?php echo home_url(); ?>">トップへ戻る</a>
        </div>
        <img class="background-img" src="<?php echo get_template_directory_uri(); ?>/img/img02.jpg" alt="808_cafe">
    </main>
    <?php // get_sidebar(); 
    ?>
</div>
<!-- <?php get_footer(); ?> -->
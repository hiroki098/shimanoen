<?php get_header(); ?>

<div class="archive-main-contents">

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
    bcn_display();
}?>
    </div>

    <div class="page-title">
        <div class="left"><img
                src="<?php echo get_template_directory_uri(); ?>/img/company-bg1.png"
                alt="タイトル"></div>
        <h2>記事一覧</h2>
        <div class="right"><img
                src="<?php echo get_template_directory_uri(); ?>/img/company-bg2.png"
                alt="タイトル"></div>
    </div>

    <div class="box">

        <?php
      if (have_posts()) :
          while (have_posts()) : the_post();
      ?>
        <div class="item">
            <div class="blog-img">
                <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                <p class="genre"><?php single_cat_title(); ?>
                </p>
            </div>
            <p class="date"><?php the_time('Y年m月d日（D）'); ?>
            </p>
            <p><?php the_title(); ?>
            </p>
        </div>

        <?php
          endwhile;
      endif;
      ?>

    </div>

    <div class="pager">
        <div class="pager-prev"><?php previous_posts_link('前のページ'); ?>
        </div>
        <div class="pager-next"><?php next_posts_link('次のページ'); ?>
        </div>
    </div>


</div>
<?php get_footer();

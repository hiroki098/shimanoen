<?php
/**
 * Template Name: 全カテゴリーを表示する */
?>

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
    <h2>お知らせ</h2>
    <div class="right"><img
        src="<?php echo get_template_directory_uri(); ?>/img/company-bg2.png"
        alt="タイトル"></div>
  </div>

  <div class="box">


    <?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $the_query = new WP_Query(array(
     'post_status' => 'publish',
     'paged' => $paged,
     'posts_per_page' => 10, // 表示件数
     'category_name' => 'event, training',
     'orderby'     => 'date',
     'order' => 'DESC'
 ));
  
  
 if ($the_query->have_posts()) :?><?php
    while ($the_query->have_posts()) : $the_query->the_post();?>


    <div class="item">
      <div class="blog-img">
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
        <div class="genre"><?php the_category(); ?>
        </div>
      </div>
      <p class="date"><?php the_time('Y年m月d日（D）'); ?>
      </p>
      <p><?php the_title(); ?>
      </p>
    </div>


    <?php endwhile; endif; wp_reset_postdata(); ?>


  </div>



  <!-- pagenation -->
  <div class="pagenation">
    <?php
if ($the_query->max_num_pages > 1) {
        echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%/',
        'current' => max(1, $paged),
        'mid_size' => 1,
        'total' => $the_query->max_num_pages
    ));
    }
wp_reset_postdata();?>
  </div><!-- /pagenation -->




</div>
<?php get_footer();

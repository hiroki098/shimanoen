<?php
/**
 * Template Name: 全カテゴリーを表示する */
?>
 
 <?php get_header(); ?>

 <div class="archive-main-contents">

 <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

             <div class="page-title">
               <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/img/company-bg1.png" alt="タイトル"></div>
               <h2>お知らせ</h2>
               <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/img/company-bg2.png" alt="タイトル"></div>
             </div>

             <div class="box">

			 <?php
	$wp_query = new WP_Query();
	$my_posts = array(
		'post_type' => 'post',
		'posts_per_page'=> '10',
	);
	$wp_query->query( $my_posts );
	if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
?>

				<div class="item">
                 <div class="blog-img">
                   <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
                   <div class="genre"><?php the_category(); ?></div>
                 </div>
                 <p class="date"><?php the_time('Y年m月d日（D）'); ?></p>
                 <p><?php the_title(); ?></p>
               </div>


			   <?php endwhile; endif; wp_reset_postdata(); ?>

			   <?php the_posts_pagination(); ?>
               </div>





</div>
<?php get_footer(); ?>
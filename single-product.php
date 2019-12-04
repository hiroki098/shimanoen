<?php
/*
 * Template Name: 商品
 * Template Post Type: post
 */
?>

<?php get_header(); ?>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>


     <div class="single-main-contents">
         <h1><?php the_title(); ?></h1>
         <div class="date-category">
             <p class="date"><?php the_time('Y年m月d日（D）'); ?></p>
             <div class="genre"><?php the_category(); ?></div>
         </div>
         <div class="blog-img"><?php the_post_thumbnail( 'large' ); ?></div>
         <div class="content"><p><?php the_content(); ?></p></div>
     </div>


        <?php 
          endwhile;
      endif;
      ?>

<?php get_footer(2); ?>



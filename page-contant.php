             <?php get_header(); ?>
    
             <div class="contant-main-contents">

             <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

                 <div class="page-title">
                     <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/img/company-bg1.png" alt="タイトル"></div>
                     <h2>お問い合わせ</h2>
                     <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/img/company-bg2.png" alt="タイトル"></div>
                 </div> 

                 <div class="sub-title">どんなことでもお気軽にお問い合わせください。</div>
                 
                 <div class="box"><?php echo do_shortcode('[contact-form-7 id="24" title="コンタクトフォーム 1"]'); ?></div>
                 
             </div>             

             <?php get_footer(); ?>
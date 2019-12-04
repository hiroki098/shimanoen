             <?php get_header(); ?>
    
             <div class="about-main-contents">

             <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

                 <div class="page-title">
                     <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/img/company-bg1.png" alt="タイトル"></div>
                     <h2>当園について</h2>
                     <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/img/company-bg2.png" alt="タイトル"></div>
                 </div>
                 <div class="box-intro">
                     <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/img/intro.png" alt="イントロ"></div>
                     <div class="right"><p>〇〇県〇〇郡、標高800メートル、<br>
                            人口3000人弱の小さな村に私たちの農園はあります。<br>
                            緑豊かなこの土地で、土や品種に徹底的にこだわりながら
                            有機野菜を育てています。<br>
                            <br>
                            新しいモノ・コト・農業の可能性を考え、<br>
                            農業の力で社会的な課題を解決するコトで<br>
                            新たな価値提供していきます。<br>
                            
                            ・・・ちょっと真面目に語ってしまいましたが。<br>
                            野菜にかけた愛情は食べた人に必ず伝わります。<br>
                            真面目すぎるくらいがいいんです。</p></div>
                 </div>

                     <div class="title">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/top-img/h-icon-1.png" alt="会社概要">
                         <h2>会社概要</h2>
                         <div class="title-line"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img/heading-bg.png" alt="会社概要"></div>
                     </div>
                     <p class="sub-title">しま農園は野菜のことで頭がいっぱいの、とにかく真面目な会社です。</p>
                     <div class="table"><table>
                         <tr>
                             <td><p class="margin">社名</p></td>
                             <td><p>有限会社しま農園</p></td>
                         </tr>
                         <tr>
                             <td><p class="margin">創立</p></td>
                             <td><p>1993年</p></td>
                         </tr>
                         <tr>
                             <td><p class="margin">所在地</p></td>
                             <td><p>〇〇県〇〇郡〇〇村</p></td>
                         </tr>
                         <tr>
                             <td><p class="margin">資本金</p></td>
                             <td><p>1000万円</p></td>
                         </tr>
                         <tr>
                             <td><p class="margin">従業員数</p></td>
                             <td><p class="end-margin">50人</p></td>
                         </tr>
                     </table></div>
                                         
             </div>


             <?php get_footer(); ?>
<!DOCTYPE html>
<div>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>しま農園</title>

        <link rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
        <link rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/script.js">
        </script>
    </head>

    <body>
        <div class="wrapper">
            <header>
                <div class="main-container">
                    <div class="icon-left top-btn"><a href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png"></a>
                    </div>
                    <div class="icon-right">
                        <div class="header__nav_toggle" id="menu-btn">
                            <span class="header__nav_toggle_icon"></span>
                            <span class="header__nav_toggle_icon"></span>
                            <span class="header__nav_toggle_icon"></span>
                        </div>
                        <nav class="menu-container">
                            <ul class="menu">
                                <li class="menu-item"><a
                                        href="<?php echo home_url(); ?>/about">
                                        当園について<br><span>ABOUT</span>
                                    </a></li>
                                <li class="menu-item"><a
                                        href="<?php echo home_url(); ?>/news">お知らせ<br><span>NEWS</span></a>
                                </li>
                                <li class="menu-item header-logo top-btn"><?php if (!is_single()) : ?>
                                    <h1 class="header-logo"><a href="#"><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png"
                                                alt="しま農園"></a></h1>
                                    <?php else : ?>
                                    <div class="header-logo">
                                        <a
                                            href="<?php echo esc_url(home_url('/')); ?>"><img
                                                src="<?php echo get_template_directory_uri(); ?>/img/top-img/header-logo.png"
                                                alt="しま農園"></a>
                                    </div>
                                    <?php endif; ?>
                                </li>
                                <li class="menu-item"><a
                                        href="<?php echo home_url(); ?>/store">品目・ストア<br><span>STORE</span></a>
                                </li>
                                <li class="menu-item"><a
                                        href="<?php echo home_url(); ?>/contant">お問い合わせ<br><span>CONTANT</span></a>
                                </li>
                            </ul>
                        </nav>
                        </当園について<br>
                    </div>
                    <?php wp_head(); ?>
            </header>
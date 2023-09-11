<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>

    <!--googleFont-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
    <header>
        <div class="inner">
            <div class="header-content">
                <div class="header-title">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri() ?>/img/zeiroku-logo.jpg" alt=""></a>
                </div>
                <ul class="header-nav">
                    <li class="header-nav-list"><a <?php if( is_page('about') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>about#about">戈六について</a></li>
                    <li class="header-nav-list"><a <?php if( is_page('alcohol') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>alcohol#alcohol">戈六の日本酒</a></li>
                    <li class="header-nav-list"><a <?php if( is_page(array('menu', 'dish', 'drink')) ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>menu#menu">メニュー</a>
                        <ul class="dropdown-nav">
                            <li class="dropdown-nav-list"><a <?php if( is_page('menu') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>menu#menu">コース</a></li>
                            <li class="dropdown-nav-list"><a <?php if( is_page('dish') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>dish#dish">料理</a></li>
                            <li class="dropdown-nav-list"><a <?php if( is_page('drink') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>drink#drink">ドリンク</a></li>
                        </ul>
                    </li>
                    <li class="header-nav-list"><a <?php if( is_page('news') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>news#news">お知らせ</a></li>
                    <li class="header-nav-list"><a <?php if( is_page('information') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>information#information">店舗情報</a></li>
                    <li class="header-nav-list"><a href="#reserve">ご予約</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="drawer-icon">
        <div class="drawer-icon-bars">
            <div class="drawer-icon-bar1"></div>
            <div class="drawer-icon-bar2"></div>
            <div class="drawer-icon-bar3"></div>
        </div>
    </div>

    <div class="drawer-content">
        <ul class="drawer-nav">
            <li class="drawer-nav-list"><a <?php if( is_page('about') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>about#about">戈六について</a></li>
            <li class="drawer-nav-list"><a <?php if( is_page('alcohol') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>alcohol#alcohol">戈六の日本酒</a></li>
            <li class="drawer-nav-list"><a <?php if( is_page(array('menu', 'dish', 'drink')) ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>menu#menu">メニュー</a>
                <div class="drawer-dropdown-icon"></div>
                <div class="drawer-dropdown-nav">
                    <div class="drawer-dropdown-nav-list"><a <?php if( is_page('menu') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>menu#menu">コース</a></div>
                    <div class="drawer-dropdown-nav-list"><a <?php if( is_page('dish') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>dish#dish">料理</a></div>
                    <div class="drawer-dropdown-nav-list"><a <?php if( is_page('drink') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/')); ?>drink#drink">ドリンク</a></div>
                </div>
            </li>
            <li class="drawer-nav-list"><a <?php if( is_page('news') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>news#news">お知らせ</a></li>
            <li class="drawer-nav-list"><a <?php if( is_page('information') ){ echo 'class="current"'; }?> href="<?php echo esc_url( home_url('/') ); ?>information#information">店舗情報</a></li>
            <li class="drawer-nav-list"><a href="#reserve">ご予約</a></li>
        </ul>
    </div>

<?php get_header(); ?>

<div class="page-title-header float">
    <div class="inner">
        <h2 class="page-title"><?php the_title(); ?></h2>
    </div>
</div>

<section class="page-menu-bg">
    <div class="page-menu-black">
        <div class="inner">
            <div class="page-menu-wrapper float">
                <div class="page-menu-body">
                    <h2 class="page-menu-title">豊富な種類を楽しめる戈六のおでん</h2>
                    <p class="page-menu-text">お出汁のきいている戈六名物のおでんが大人気！六本木で30年以上続く老舗の味を、一度ご堪能ください。</p>
                </div>
                
                <ul class="menu-genre-lists">
                    <li class="menu-genre-list">
                        <a href="<?php echo esc_url( home_url('/') ); ?>menu#menu" class="menu-genre-link is-active">コース</a>
                    </li>
                    <li class="menu-genre-list">
                        <a href="<?php echo esc_url( home_url('/') ); ?>dish#dish" class="menu-genre-link">料理</a>
                    </li>
                    <li class="menu-genre-list">
                        <a href="<?php echo esc_url( home_url('/') ); ?>drink#drink" class="menu-genre-link">ドリンク</a>
                    </li>
                </ul>

                <div class="menu-genre-content">
                    <div class="menu-genre-img">
                        <?php
                            if( has_post_thumbnail() ){
                                the_post_thumbnail('large');
                            } else{
                                echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                            }
                        ?>
                    </div>
                    <div class="menu-genre-table">
                        <h3 class="menu-genre-title">お食事ご相談コース</h3>
                        <li class="menu-genre-item">
                            <h3 class="menu-genre-subtitle">コース料金</h3>
                            <div class="menu-genre-text">5,500円（税込）〜</div>
                        </li>
                        <li class="menu-genre-item">
                            <h3 class="menu-genre-subtitle">コース内容</h3>
                            <div class="menu-genre-text"><a href="tel:03-3403-3044">お電話</a>にてご相談により決めさせていただきます。</p>
                        </li>
                        <li class="menu-genre-item">
                            <h3 class="menu-genre-subtitle">コース品数</h3>
                            <div class="menu-genre-text">4品</div>
                        </li>
                        <li class="menu-genre-item">
                            <h3 class="menu-genre-subtitle">利用人数</h3>
                            <div class="menu-genre-text">2〜10名のご予約</div>
                        </li>
                        <li class="menu-genre-item">
                            <h3 class="menu-genre-subtitle">予約締め切り</h3>
                            <div class="menu-genre-text">来店日の3日前23時まで</div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
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
                        <a href="<?php echo esc_url( home_url('/') ); ?>menu#menu" class="menu-genre-link">コース</a>
                    </li>
                    <li class="menu-genre-list">
                        <a href="<?php echo esc_url( home_url('/') ); ?>dish#dish" class="menu-genre-link">料理</a>
                    </li>
                    <li class="menu-genre-list">
                        <a href="<?php echo esc_url( home_url('/') ); ?>drink#drink" class="menu-genre-link is-active">ドリンク</a>
                    </li>
                </ul>

                <div class="drink-content">
                    <div class="drink-content-box">
                        <div class="drink-item">
                            <h3 class="drink-title">ザ・プレミアムモルツ</h3>
                            <div class="drink-text">700円</div>
                        </div>
                        <div class="drink-item">
                            <h3 class="drink-title">蔵出地酒(40～50種類)<br class="is-sp">ワンショット</h3>
                            <div class="drink-text">600円～1350円</div>
                        </div>
                        <div class="drink-item">
                            <h3 class="drink-title">焼酎（30～40種類）<br class="is-sp">ワンショット</h3>
                            <div class="drink-text">450円～</div>
                        </div>
                        <div class="drink-item">
                            <h3 class="drink-title">割水焼酎ダブル</h3>
                            <div class="drink-text">700円</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
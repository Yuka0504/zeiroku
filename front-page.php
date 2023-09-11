<?php get_header(); ?>

<div class="swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="main-visual-img">
                <img src="<?php echo get_template_directory_uri() ?>/img/main-img1.JPG" alt="">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="main-visual-img">
                <img src="<?php echo get_template_directory_uri() ?>/img/main-img2.JPG" alt="">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="main-visual-img">
                <img src="<?php echo get_template_directory_uri() ?>/img/main-img3.JPG" alt="">
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="background">

    <section class="section about">
        <div class="inner">
            <div class="about-wrapper">
                <div class="about-right">
                    <div class="about-body">
                        <h2 class="section-title about-title">戈六について</h2>
                        <p class="about-text">六本木の交差点に位置する高級日本酒専門店『戈六』。<br class="is-pc">実家に帰ってきた時のような居心地の良さと、親しみのある隠れ家として親しまれて早35年。こだわりの『昆布だし』を使用した熱々のおでんを、銘酒を飲みながら楽しむことができます。戈六にお越しいただくことで、日頃の疲れやストレスを解消し、心底満足していただける、そんなお店を志しております。戈六名物、おでんと銘酒をぜひ一度召し上がってみませんか？</p>
                    </div>
                </div>
                <div class="about-left">
                    <div class="about-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/about-img1.JPG" alt="">
                    </div>
                </div>
                <div class="about-button">
                    <a href="<?php echo esc_url( home_url('/') ); ?>about#about" class="section-link about-link">詳細を見る</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section alcohol">
        <div class="inner">
            <div class="alcohol-wrapper">
                <div class="alcohol-left">
                    <div class="alcohol-body">
                        <h2 class="section-title alcohol-title">戈六の日本酒</h2>
                        <p class="alcohol-text">戈六では他店ではあまり見られない蔵出し地酒を提供しており、最高峰のマスターズドリーム初め、貴重な日本酒やハイボール、龜で寝かせた本格前割り焼酎、リキュール類等々、様々な種類のお酒をお出ししています。その日のお客様のお食事に合うよう、戈六店主：伸さんがおすすめの日本酒を提案することもございます。甘口のものから辛口のものまで、数多くの日本酒を提供しておりますので、日本酒好きにはたまらないお店です。</p>
                        <div class="alcohol-button">
                            <a href="<?php echo esc_url( home_url('/') ); ?>alcohol#alcohol" class="section-link alcohol-link">詳細を見る</a>
                        </div>
                    </div>
                </div>
                <div class="alcohol-right">
                    <div class="alcohol-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/alcohol-img1.JPG" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<section class="section menu">
    <h2 class="section-title menu-title">メニュー</h2>
    <div class="menu-wrapper">

        <?php 
            $menu_posts = get_posts( array(
                'post_type' => 'post',
                'posts_per_page' => '3',
                'category__in' => 8,
                'orderby' => 'rand',
            ));
        ?>
        <?php foreach ( $menu_posts as $post) : setup_postdata( $post ); ?>
        <a href="#" class="menu-item">
            <div class="menu-img">
                <?php 
                    if( has_post_thumbnail() ){
                        the_post_thumbnail('large');
                    } else{
                        echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                    }
                ?>
            </div>
            <div class="menu-body">
                <div class="menu-body-title"><?php the_title(); ?></div>
                <div class="menu-body-text"><?php the_excerpt(); ?></div>
            </div>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
        
        </div>
    </div>
    <div class="menu-button">
        <a href="<?php echo esc_url( home_url('/') ); ?>menu#menu" class="section-link">詳細を見る</a>
    </div>
</section>

<section class="section news">
    <div class="inner">
        <h2 class="section-title news-title">お知らせ</h2>
        <div class="news-wrapper">
            <?php 
                $news_posts = get_posts( array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'tag' => 'pickup',
                    'orderby' => 'rand',
                ));
            ?>
            <?php foreach ( $news_posts as $post) : setup_postdata( $post ); ?>
            <a href="<?php echo esc_url( the_permalink() ); ?>" class="news-item">
                <div class="news-item-img">
                    <?php 
                        if( has_post_thumbnail() ){
                            the_post_thumbnail('large');
                        } else{
                            echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                        }
                    ?>
                </div>

                <div class="news-item-body">
                    <div class="news-item-meta">
                        <time class="news-item-published" datetime="<?php the_time( 'c' );?>">公開日 <?php the_time( 'Y/n/j' ); ?></time>
                        <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?>
                        <time class="news-item-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ); ?></time>
                        <?php endif; ?>
                    </div>
                    <h3 class="news-item-title"><?php the_title(); ?></h3>
                    <div class="news-item-text"><?php the_excerpt(); ?></div>
                </div>
            </a>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <div class="overlay" id="js-overlay"></div>
        <div class="modal" id="js-modal">
            <div class="modal-close-wrap">
                <button class="modal-close">
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="modal-content">
                <h4 class="modal-title">新型コロナウイルス<br class="is-sp">感染予防対策について</h4>
                <p class="modal-text">コンテンツ・内容が入ります。</p>
            </div>
        </div>
        <div class="news-modal">
            <div class="news-modal-row">
                <div class="news-modal-title">重要なお知らせ</div>
                <div class="news-modal-link">新型コロナウイルス感染予防対策について</div>
            </div>
        </div>
        <div class="news-button">
            <a href="<?php echo esc_url( home_url('/') ); ?>news#news" class="section-link news-link">詳細を見る</a>
        </div>
    </div>
</section>

<section class="section information">
    <div class="inner">
        <div class="information-wrapper">
            <div class="information-map">
                <div class="iframe-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.5513309731573!2d139.72960331520005!3d35.66342433855577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b7806e7d20f%3A0xb2fdd82c680715dd!2z5oiI5YWtKOOBnOOBhOOCjeOBjyk!5e0!3m2!1sja!2sjp!4v1663243428884!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="information-body">
                <h2 class="section-title information-title">店舗情報</h2>
                <div class="information-list">
                    <h3 class="information-subtitle">住所</h3>
                    <p class="information-text">〒106-0032 <br class="is-sp">東京都港区六本木7-14-8 <br class="is-sp">アーツショップビルB1F</p>
                </div>
                <div class="information-list">
                    <h3 class="information-subtitle">営業日</h3>
                    <p class="information-text">月曜日〜金曜日</p>
                </div>
                <div class="information-list">
                    <h3 class="information-subtitle">営業時間</h3>
                    <p class="information-text">18:00〜23:00 <br class="is-sp">(料理L.O.22:30 <br class="is-sp">ドリンクL.O.22:40）</p>
                </div>
                <div class="information-list">
                    <h3 class="information-subtitle">お電話</h3>
                    <a href="tel:03-3403-3044" class="information-text">03-3403-3044</a>
                </div>
                <div class="information-list">
                    <h3 class="information-subtitle">アクセス</h3>
                    <p class="information-text">六本木駅<br class="is-sp">A4出口より徒歩1分</p>
                </div>
            </div>
        </div>
        <div class="information-button">
            <a href="https://goo.gl/maps/exfWrM3vVJsdZuNu8" class="section-link information-link">Google Mapで見る</a>
        </div>
    </div>
</section>



<?php get_footer(); ?>
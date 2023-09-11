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
                        <a href="<?php echo esc_url( home_url('/') ); ?>dish#dish" class="menu-genre-link is-active">料理</a>
                    </li>
                    <li class="menu-genre-list">
                        <a href="<?php echo esc_url( home_url('/') ); ?>drink#drink" class="menu-genre-link">ドリンク</a>
                    </li>
                </ul>

                <div class="dish-content">

                    <?php 
                        $dish_posts = get_posts( array(
                            'post_type' => 'post',
                            'posts_per_page' => '9',
                            'category__in' => 9,
                            'orderby' => 'date',
                        ));
                    ?>
                    <?php foreach ( $dish_posts as $post ) : setup_postdata( $post ); ?>
                    <div class="dish-item">
                        <div class="dish-img">
                           <?php
                            if ( has_post_thumbnail() ){
                                the_post_thumbnail('large');
                            } else{
                                echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                            }
                           ?>
                        </div>
                        <h3 class="dish-title"><?php the_title(); ?></h3>

                        <?php $excerpt = get_the_excerpt(); if ( has_excerpt() ) : ?>
                        <div class="dish-price"><?php echo nl2br( $excerpt ); ?></div>
                        <?php endif; ?>

                        <div class="dish-text"><?php the_content(); ?></div>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
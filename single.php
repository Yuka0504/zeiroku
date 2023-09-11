<?php get_header(); ?>

<div class="page-title-header">
    <div class="inner">
        <h2 class="page-title single-title"><?php the_title(); ?></h2>
    </div>
</div>

<div class="section-page">
    <div class="inner">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="single-content">
            <div class="single-item-meta">
                <time class="single-item-published" datetime="<?php the_time( 'c' );?>">公開日 <?php the_time( 'Y/n/j' ); ?></time>
                <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?>
                <time class="single-item-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ); ?></time>
                <?php endif; ?>
            </div>
            <div class="single-img">
                <?php 
                    if( has_post_thumbnail() ){
                        the_post_thumbnail('large');
                    } else{
                        echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                    }
                ?>
            </div>
            <div class="single-text"><?php the_content(); ?></div>
            <div class="single-news-button">
                <a href="<?php echo esc_url( home_url('/') ); ?>news#news" class="section-link single-news-link">一覧に戻る</a>
            </div>
        </div>
        <?php endwhile; endif;?>
    </div>
</div>


<?php get_footer(); ?>
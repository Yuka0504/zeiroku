<?php get_header(); ?>

<div class="page-title-header">
    <div class="inner">
        <h2 class="page-title"><?php the_title(); ?></h2>
    </div>
</div>

<div class="section-page">
    <div class="inner">
        <div class="page-news-wrapper">

            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query( array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'paged' => $paged,
                    'posts_per_page' => 6,
                    'category__in' => 7,
                    'orderby' => 'date',
                ));
            ?>
            <?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="page-news-item">
                <a href="<?php echo esc_url( the_permalink() ); ?>" class="page-news-link">
                    <div class="page-news-header">
                        <div class="page-news-img">
                           <?php
                                if( has_post_thumbnail() ){
                                    the_post_thumbnail('large');
                                } else{
                                    echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                                }
                           ?>
                        </div>
                    </div>
                    <div class="page-news-body">
                        <div class="news-item-meta">
                            <time class="news-item-published" datetime="<?php the_time( 'c' );?>">公開日 <?php the_time( 'Y/n/j' ); ?></time>
                            <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?>
                            <time class="news-item-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ); ?></time>
                            <?php endif; ?>
                        </div>
                        <h3 class="page-news-title"><?php the_title(); ?></h3>
                        <div class="page-news-text"><?php the_excerpt(); ?></div>
                    </div>
                </a>
            </article>
            <?php endwhile; endif;?>
            
        </div>

       
        <div class="pagination">

        <?php //ページリスト表示処理
            global $wp_rewrite;
            $paginate_base = get_pagenum_link(1);
            if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                $paginate_format = '';
                $paginate_base = add_query_arg('paged','%#%');
            }else{
                $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                user_trailingslashit('page/%#%/','paged');
                $paginate_base .= '%_%';
            }
            echo paginate_links(array(
                'base' => $paginate_base,
                'format' => $paginate_format,
                'total' => $the_query->max_num_pages,
                'mid_size' => 1,
                'current' => ($paged ? $paged : 1),
                'prev_text' => '',
                'next_text' => '',
            ));
       ?>
        </div>

    </div>
</div>


<?php get_footer(); ?>
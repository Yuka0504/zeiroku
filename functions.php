<?php
/**
 * テーマのセットアップ
 */
function my_setup(){
    add_theme_support('post-thumbnails'); //アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); //投稿とコメントのRSSフィードRSSフィードのリンクを有効化
    add_theme_support('title-tag'); //タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( //HTML5ででマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
        );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
 * cssとJavaScriptの読み込み
 */
function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '5.15.4', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), filemtime( get_theme_file_path( 'css/style.css' )), 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), filemtime( get_theme_file_path( 'js/script.js' )), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ){
    if( is_category() ){ //カテゴリーアーカイブの場合
        $title = single_cat_title( '', false );
    } elseif( is_tag() ) { //タグアーカイブの場合
        $title = single_tag_title( '', false );
    } elseif( is_post_type_archive() ){ //投稿タイプのアーカイブの場合
        $title = post_type_archive_title( '', false );
    } elseif( is_tax() ){ //タームアーカイブの場合
        $title = single_term_title( '', false );
    } elseif( is_author() ){ //作者アーカイブの場合
        $title = get_the_author(); 
    } elseif( is_date() ){ //日付アーカイブの場合
        $title = '' ;
        if( get_query_var( 'year') ){
            $title .= get_query_var( 'year' ). '年';
        }
        if( get_query_var( 'monthum' ) ){
            $title .= get_query_var( 'monthum' ). '月';
        }
        if( get_query_var( 'day' ) ){
            $title .= get_query_var( 'day' ). '日';
        }
    }

    return $title;

};
add_filter( 'get_the_archive_title', 'my_archive_title') ;

?>
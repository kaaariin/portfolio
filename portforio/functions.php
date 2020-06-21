<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
**/
function my_setup()
{
add_theme_support('post-thumbnails');  // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
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
* CSSとJavaScriptの読み込み
*
* @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
*/
function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('adobefont', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), '3.7.2', 'all');
wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/riset.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('my', get_template_directory_uri() . '/js/highlight.pack.js', array( '' ), '1.0.0', true);
if( is_front_page('front-page') ){
    wp_enqueue_script('arrow', get_template_directory_uri() . '/js/arrow.js', array( 'jquery' ), '1.0.0', true);
    }
if( is_front_page('front-page') ){
    wp_enqueue_script('top', get_template_directory_uri() . '/js/top.js', array( 'jquery' ), '1.0.0', true);
    }
if( is_page('introduction') ){
    wp_enqueue_script('introduction', get_template_directory_uri() . '/js/introduction.js', array( 'jquery' ), '1.0.0', true);
    }
if( is_page('skills') ){
    wp_enqueue_script('skills', get_template_directory_uri() . '/js/skills.js', array( 'jquery' ), '1.0.0', true);
    }
if( is_single() ){
    wp_enqueue_script('single', get_template_directory_uri() . '/js/single.js', array( 'jquery' ), '1.0.0', true);
    }

}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
* メニューの登録
*
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/
function my_menu_init()
{
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
            'footer' => 'フッターメニュー',
            'archive' => 'アーカイブ',
        )
        );
    }
        add_action('init','my_menu_init');



// /* 投稿アーカイブページの作成 */
// function post_has_archive( $args, $post_type ) {

// 	if ( 'post' == $post_type ) {
// 		$args['rewrite'] = true;
// 		$args['has_archive'] = '30days-trial'; //任意のスラッグ名
// 	}
// 	return $args;

// }
// add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title($title) {
    if ( is_category() ) { // カテゴリーアーカイブの場合
        $title = ''. single_cat_title( '', false ) . '';
        } elseif ( is_tag() ) { // タグアーカイブの場合
        $title = '' . single_tag_title( '', false ) . '';
        } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
        $title = '' . post_type_archive_title( '', false ) . '';
        } elseif ( is_tax() ) { // タームアーカイブの場合
        $title = '' . single_term_title( '', false );
        } elseif ( is_author() ) { // 作者アーカイブの場合
        $title = '' . get_the_author() . '';
        } elseif ( is_date() ) { // 日付アーカイブの場合
        $title = '';
        if ( get_query_var( 'year' ) ) {
        $title .= get_query_var( 'year' ) . '年';
        }
        if ( get_query_var( 'monthnum' ) ) {
        $title .= get_query_var( 'monthnum' ) . '月';
        }
        if ( get_query_var( 'day' ) ) {
        $title .= get_query_var( 'day' ) . '日';
        }
        }
        return $title;
        };
        add_filter( 'get_the_archive_title', 'my_archive_title' );

        
        /**
        * カテゴリーを1つだけ表示
        *
        * @param boolean $anchor aタグで出力するかどうか.
        * @param integer $id 投稿id.
        * @return void
        */
        
        function my_the_post_category($id = 0 ) {
        global $post;
        //引数が渡されなければ投稿IDを見るように設定
        if ( 0 === $id ) {
        $id = $post->ID;
        }
        
        //カテゴリー一覧を取得
        $this_categories = get_the_category( $id );
        if ( $this_categories[0] ) {
        if ( $anchor ) { //引数がtrueならリンク付きで出力
        echo '<a href="' . esc_url( get_category_link( $this_categories[0]->term_id ) ) . '">' . esc_html( $this_categories[0]->cat_name ) . '</a>';
        } else { //引数がfalseならカテゴリー名のみ出力
        echo esc_html( $this_categories[0]->cat_name );
        }
        }
        }




/**
* タグ取得
*
* @param integer $id 投稿id.
* @return void
*/
function my_get_post_tags( $id = 0 ) {
global $post;
//引数が渡されなければ投稿IDを見るように設定
if ( 0 === $id ) {
$id = $post->ID;
}
//タグ一覧を取得
$tags = get_the_tags( $id );

if ( $tags ) {
foreach( $tags as $tag ){

echo '<div class="entry-tag-item"><a href="'. esc_url( get_tag_link($tag->term_id) ) .'">'. esc_html( $tag->name ) .'</a></div><!-- /entry-tag-item -->';
}
}
}

/**
* ウィジェットの登録
*
* @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
*/
function my_widget_init() {
    register_sidebar(
        array(
            'name' => 'サイドバー', //表示するエリア名
            'id' => 'sidebar',//id
            'before_widget' => '<div id = "%1$s" class="widget%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        )
        );
}
add_action('widgets_init','my_widget_init');

/**
* カスタムフィールドを使ってアクセス数を取得する（特定記事のアクセス数確認用）
*
* @param integer $id 投稿id.
* @return void
*/
//アクセス数を取得
function get_post_views( $id = 0) {
    global $post;
//引数が渡されなければ投稿IDをみるように設定
if( 0 === $id) {
    $id = $post->ID;
}
$count_key = 'view_counter';
$count = get_post_meta($id,$count_key,true);

if($count === '') {
    delete_postmeta($id,$count_key);
    add_post_meta($id,$count_key,'0');
}
return $count;
}

/**
* アクセスカウンター
*
* @return void
*/
function set_post_views() {
    global $post;
    $count = 0;
    $count_key = 'view_counter';

    if($post) {
        $id = $post->ID;
        $count_key = 'view_counter';
    }

    if($counter === '') {
        delete_post_meta($id,$count_key,true);
    }
    if($count === '') {
        delete_post_meta($id,$count_key);
        add_post_meta($id,$count_key,'1');
    }elseif($count>0) {
        if(!is_user_logged_in()){//管理者の（自分の）閲覧を除外
            $count++;
            update_post_meta($id,$cunt_key,$count);
        }
    }
    //$countが０のママの場合（404や該当記事の検索結果が０件の場合）は何もしない。
}
add_action('template_redirect','set_post_views',10);

/**

* 検索結果から固定ページを除外する

* @param string $search SQLのWHERE句の検索条件文

* @param object $wp_query WP_Queryのオブジェクト

* @return string $search 条件追加後の検索条件文

*/
function my_posts_search($search,$wp_query) {
    if($wp_query->is_search() && $wp_query->is_main_query()&&!is_admin()){
        //検索結果を投稿タイプに絞る
        $search.="AND post_type='post'";
        return $search;
    }
    return $search;
}
add_filter('posts_search','my_posts_search',10,2);

/**
* コンタクトボタンのショートコード
*
*
*/
function contactbtn_shortcode( $atts, $content = '' ) {
    return '<div class="btn__contact"><a class="btn" href="' . $atts['link'] . '">' . $content . '</a></div>';
    }
    add_shortcode( 'contact__btn', 'contactbtn_shortcode' );


/**
 * 予約ボタンのショートコード
 */
function reservesbtn_shortcode($attrs, $content = '' ){
    return '  <div class="btn__reserved"><a class="btn" href="' . $attrs['link'] . '" >' . $content . '</a></div>';
}
add_shortcode('reserved__btn','reservesbtn_shortcode');




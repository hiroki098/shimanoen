<?php 

//---------------------------------------------------------------------------
//　jQueryを使えるようにする
//---------------------------------------------------------------------------
function add_jquery_scripts() {
    if(is_admin()) return; 
    wp_deregister_script( 'jquery'); 
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), false, false);
    wp_enqueue_script( 'jquery-mig', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'add_jquery_scripts');

//---------------------------------------------------------------------------
//　サムネイルを使えるようにする
//---------------------------------------------------------------------------
add_theme_support('post-thumbnails'); 

/* サムネイルのサイズを指定（追加）する */
add_image_size( 'archive_thumbnail', 250, 200, false );

//---------------------------------------------------------------------------
//　固定ページのパーマリンクの最後に.htmlを付ける
//---------------------------------------------------------------------------


//---------------------------------------------------------------------------
//　カスタムメニューの設定
//---------------------------------------------------------------------------
add_theme_support( 'menus' );
register_nav_menu( 'primary', 'Header navigation menu' );
register_nav_menu( 'footer-navi', 'Footer navigation menu' );

//---------------------------------------------------------------------------
//　サイドバーの設定
//　nameとidを変更すれば幾つでも登録できる。
//　ダッシュボードの外観>ウィジェットから中身を設定可能。
//---------------------------------------------------------------------------
register_sidebar( array(
	'name' => 'Sidebar-1',
	'id' => 'sidebar-1',
	'description' => 'Widget area of sidebar',
	'before_widget' => '<div id="%1$s" class="widget %2$s sidebar">',
	'after_widget' => '</div>',
	'before_title'  => '<h4 class="text-center widgettitle">',
	'after_title'   => '</h4>' 
) );

//---------------------------------------------------------------------------
//
//---------------------------------------------------------------------------


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
)
);
}
add_action('init', 'my_menu_init');


//---------------------------------------------------------------------------
//スマホならtrue, タブレット・PCならfalseを返す
//---------------------------------------------------------------------------
function is_mobile(){
    $useragents = array(
		'iPhone',          // iPhone
		'iPod',            // iPod touch
		'Android',         // 1.5+ Android
		'dream',           // Pre 1.5 Android
		'CUPCAKE',         // 1.5+ Android
		'blackberry9500',  // Storm
		'blackberry9530',  // Storm
		'blackberry9520',  // Storm v2
		'blackberry9550',  // Storm v2
		'blackberry9800',  // Torch
		'webOS',           // Palm Pre Experimental
		'incognito',       // Other iPhone browser
		'webmate'          // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

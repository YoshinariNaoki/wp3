{"filter":false,"title":"functions.php","tooltip":"/wp-content/themes/wp-3/functions.php","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":22,"column":2},"action":"remove","lines":["<?php","","if ( function_exists('register_sidebar') )","register_sidebar(array(","'name'=>'サイドバー1',","'id' => 'sidebar-1',","'before_widget' => '<div id=\"%1$s\" class=\"widget %2$s\">',","'after_widget' => '</div>',","'before_title' => '<div class=\"sidebar-title\">',","'after_title' => '</div>',","));","","","function new_excerpt_more( $more ) {"," return ' <a class=\"read-more\" href=\"'. get_permalink( get_the_ID() ) . '\">続きを読む</a>';","}","add_filter( 'excerpt_more', 'new_excerpt_more' );","function add_favicon_link(){ ?>"," <link rel=\"shortcut icon\" href=\"<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico\" />"," <?php }","add_action('wp_head', 'add_favicon_link');","","?>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":22,"column":2},"action":"insert","lines":["<?php","","if ( function_exists('register_sidebar') )","register_sidebar(array(","'name'=>'サイドバー1',","'id' => 'sidebar-1',","'before_widget' => '<div id=\"%1$s\" class=\"widget %2$s\">',","'after_widget' => '</div>',","'before_title' => '<div class=\"sidebar-title\">',","'after_title' => '</div>',","));","","","function new_excerpt_more( $more ) {"," return ' <a class=\"read-more\" href=\"'. get_permalink( get_the_ID() ) . '\">続きを読む</a>';","}","add_filter( 'excerpt_more', 'new_excerpt_more' );","function add_favicon_link(){ ?>"," <link rel=\"shortcut icon\" href=\"<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico\" />"," <?php }","add_action('wp_head', 'add_favicon_link');","","?>"]}],[{"start":{"row":22,"column":2},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":39},"action":"insert","lines":["add_theme_support( 'post-thumbnails' );"],"id":4}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":2},"action":"remove","lines":["?>"],"id":5},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["",""]},{"start":{"row":20,"column":42},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":39},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":1},"action":"insert","lines":["?"],"id":7},{"start":{"row":23,"column":1},"end":{"row":23,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":39},"action":"remove","lines":["add_theme_support( 'post-thumbnails' );"],"id":8},{"start":{"row":22,"column":0},"end":{"row":22,"column":39},"action":"insert","lines":["add_theme_support( 'post-thumbnails' );"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":22,"column":39},"end":{"row":22,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1600138059263,"hash":"a0ec5117630234e73da8e402af79eab743e39a08"}
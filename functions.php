<?php
/**
*アイキャッチ画像を使用可能にする
*/
add_theme_support('post-thumbnails');
/**
*カスタムメニュー昨日を使用可能にする
*/
add_theme_support( 'menus' );
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
functions my_comment_form_default_fields( $args ) {
  $args['url'] = ''; //「ウェブサイト」を削除
  return $args;
}

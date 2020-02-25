<?php
/**
*アイキャッチ画像を使用可能にする
*/
add_theme_support('post-thumbnails');
/**
*カスタムメニュー昨日を使用可能にする
*/
add_theme_support( 'menus' );

function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://サイトドメイン/contact/thanks';
}, false );
</script>
<?php
}

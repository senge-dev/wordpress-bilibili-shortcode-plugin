<?php

/*
Plugin Name: Bilibili Shortcode Support
Plugin URI: https://senge.dev
Description: Bilibili视频解析插件，可以使用WordPress简码在文章中嵌入Bilibili视频
Version: 1.0
Author: Senge Dev
Author URI: https://senge.dev
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

add_shortcode('bilibili', 'bilibili_shortcode');
function bilibili_shortcode($atts) {
  $bvid = $atts['bvid'];			// 视频的BVID，不允许为空
  return '<div style="position: relative; padding: 40% 45%;"><iframe src="//player.bilibili.com/player.html?bvid='.$bvid.'&page=1&as_wide=1&high_quality=1&danmaku=1" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true" style="position: absolute; width: 100%; height: 100%; left: 0; top: 0;"></iframe></div>';
}

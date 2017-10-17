<?php
// 爱奇艺--电影排行榜--热播榜
include_once 'simple_html_dom.php';
$html = file_get_html('http://www.iqiyi.com/dianying_new/i_list_paihangbang.html');
foreach($html->find('.wrapper-piclist') as $element){
	foreach($element->find('.J_videoLi') as $s){
		echo $s->children(0)->children(0)->href; //url地址
		echo $s->children(0)->children(0)->children(0)->src; //图片地址
		echo $s->children(1)->children(0)->children(0)->plaintext; //评分
		echo $s->children(1)->children(0)->children(1)->plaintext; //电影名字
		echo "<br>";
	}
}
?>
<?php
// 爱奇艺--电影排行榜--热播榜
include_once 'simple_html_dom.php';
//获取html数据转化为对象
$html = file_get_html('http://www.iqiyi.com/dianying_new/i_list_paihangbang.html');
//A-Z的字母列表每条数据是在id=letter-focus 的div内class= letter-focus-item的dl标签内，用find方法查找即为
$arr = array();
foreach($html->find('.wrapper-piclist') as $element){
// 	print $element;
// 	foreach ($element->find('.J_videoLi')->children() as $s){
// 		$arr[]= $s->innertext . '<br>';
// 	}
	foreach($element->find('.J_videoLi') as $s){
		echo $s->children(1)->children(0)->children(0)->plaintext;
		echo $s->children(1)->children(0)->children(1)->plaintext;
		echo "<br>";
	}
	
// 	$arr[]= $element->innertext . '<br>';
    
// 	$fileName='data.txt';//不用事先建好
//     $arrLen=count($arr);
//     for($i=0;$i<$arrLen;$i++){
// 		file_put_contents($fileName,$arr[$i],FILE_APPEND|LOCK_EX);
// 	     /*FILE_APPEND|LOCK_EX是往后追加数据，如果没有该参数，则只能插入一条数据
// 	         但是如果重新启动抓取时，则会将以往抓取过的数据继续存入*/
// 	}
// 	//以上是抓取的数据然后存到data.text里
//     $content=file_get_contents($fileName);
//     $cont=explode("<br>",$content);
//     $contLen=count($cont);
//     for($i=0;$i<$contLen;$i++) {
// 		unset($cont[2*$i+1]);
// 	}
}
var_dump($arr);
?>
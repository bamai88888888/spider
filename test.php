<?php
include_once 'simple_html_dom.php';
//获取html数据转化为对象
$html = file_get_html('test.html');
$arr = array();
foreach($html->find('.no1') as $element){
	foreach ($element->find('.no2') as $s){
		print $s->children(1)->plaintext;
	}
	echo "<br>";
}
// 输出
// ds
// ds
?>
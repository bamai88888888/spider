<?php
// ������--��Ӱ���а�--�Ȳ���
include_once 'simple_html_dom.php';
$html = file_get_html('http://www.iqiyi.com/dianying_new/i_list_paihangbang.html');
foreach(str_get_html($html->find('.wrapper-piclist',0)->innertext)->find('.J_videoLi') as $element){
		echo $element->children(0)->children(0)->href; //url��ַ
		echo $element->children(0)->children(0)->children(0)->src; //ͼƬ��ַ
		echo $element->children(1)->children(0)->children(0)->plaintext; //����
		echo $element->children(1)->children(0)->children(1)->plaintext; //��Ӱ����
		echo "<br>";
}
// foreach(str_get_html($html->find('.no1',0)->innertext)->find('.no2') as $element){
// 	print $element->children(0)->plaintext;
// 	print $element->children(1)->plaintext;
// 	echo '<br>';
// }
// foreach($html->find('.wrapper-piclist') as $element){
// 	foreach($element->find('.J_videoLi') as $s){
// 		echo $s->children(0)->children(0)->href; //url��ַ
// 		echo $s->children(0)->children(0)->children(0)->src; //ͼƬ��ַ
// 		echo $s->children(1)->children(0)->children(0)->plaintext; //����
// 		echo $s->children(1)->children(0)->children(1)->plaintext; //��Ӱ����
// 		echo "1<br>";

// 	}
// }
?>
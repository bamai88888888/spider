<?php
// ������--��Ӱ���а�--�Ȳ���
include_once 'simple_html_dom.php';
$html = file_get_html('http://www.iqiyi.com/dianying_new/i_list_paihangbang.html');
foreach($html->find('.wrapper-piclist') as $element){
	foreach($element->find('.J_videoLi') as $s){
		echo $s->children(0)->children(0)->href; //url��ַ
		echo $s->children(0)->children(0)->children(0)->src; //ͼƬ��ַ
		echo $s->children(1)->children(0)->children(0)->plaintext; //����
		echo $s->children(1)->children(0)->children(1)->plaintext; //��Ӱ����
		echo "<br>";
	}
}
?>
<?php
include_once 'simple_html_dom.php';
//��ȡ��һ��class='no1'�µ�����Ԫ��
$html = file_get_html('test.html');
$arr = array();
foreach(str_get_html($html->find('.no1',0)->innertext)->find('.no2') as $element){
	print $element->children(0)->plaintext;
	print $element->children(1)->plaintext;
	echo '<br>';
}
?>
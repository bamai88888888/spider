<?php
include_once 'simple_html_dom.php';
//��ȡ����class='no1'�µ�����Ԫ��
$html = file_get_html('test.html');
$arr = array();
foreach($html->find('.no1') as $element){
	foreach ($element->find('.no2') as $s){
		print $s->children(1)->plaintext;
	}
	echo "<br>";
}
// ���
// ds
// ds
?>
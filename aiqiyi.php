<?php
// ������--��Ӱ���а�--�Ȳ���
include_once 'simple_html_dom.php';
//��ȡhtml����ת��Ϊ����
$html = file_get_html('http://www.iqiyi.com/dianying_new/i_list_paihangbang.html');
//A-Z����ĸ�б�ÿ����������id=letter-focus ��div��class= letter-focus-item��dl��ǩ�ڣ���find�������Ҽ�Ϊ
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
    
// 	$fileName='data.txt';//�������Ƚ���
//     $arrLen=count($arr);
//     for($i=0;$i<$arrLen;$i++){
// 		file_put_contents($fileName,$arr[$i],FILE_APPEND|LOCK_EX);
// 	     /*FILE_APPEND|LOCK_EX������׷�����ݣ����û�иò�������ֻ�ܲ���һ������
// 	         ���������������ץȡʱ����Ὣ����ץȡ�������ݼ�������*/
// 	}
// 	//������ץȡ������Ȼ��浽data.text��
//     $content=file_get_contents($fileName);
//     $cont=explode("<br>",$content);
//     $contLen=count($cont);
//     for($i=0;$i<$contLen;$i++) {
// 		unset($cont[2*$i+1]);
// 	}
}
var_dump($arr);
?>
<?php
include_once 'simple_html_dom.php';
$html = file_get_html('http://www.iqiyi.com/v_19rr8j8ra4.html');
print $html->find('span[id=widget-videotitle]',0)->plaintext;
?>
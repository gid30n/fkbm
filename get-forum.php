<?php
include('simple_html_dom.php');


$ch = curl_init();
$timeout = 5; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, 'http://localhost/fkbm/forum/conversations/all');
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
$file_contents = curl_exec($ch); //get the page contents
$html = str_get_html($file_contents);
$contentfrm = $html->find('div[id=conversations]', 0);


curl_close($ch);

?>


<?php
include('simple_html_dom.php');

$blogdata = curl_init();
$timeout = 5; // set to zero for no timeout
curl_setopt ($blogdata, CURLOPT_URL, 'http://localhost/fkbm/blog');
curl_setopt ($blogdata, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($blogdata, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($blogdata, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($blogdata, CURLOPT_POSTREDIR, 3);
curl_setopt($blogdata,CURLOPT_FOLLOWLOCATION,true);
$file_contentsblg = curl_exec($blogdata); //get the page contents
$htmlblg = str_get_html($file_contentsblg);
$contentblg = $htmlblg->find('div[id=recent-posts-2]', 0);

curl_close($blogdata);


?>

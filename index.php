<?php 
header('Content-Type: text/html; charset=utf-8');
set_time_limit(10000);
require_once 'simpleHtmlDom.php';
require_once 'function.php';

$html       = use_curl_get_html('https://www.hotelscombined.vn/Hotel/TTC_Hotel_Premium_Ngoc_Lan.htm', true);
$html       = str_get_html($html);

$arrLawLink = [
	'#description' => '#hc_htl_desc'
];

if ($html) 
{
	$content = $html->find($arrLawLink['#description'], 0);
	var_dump($content->innertext());
}
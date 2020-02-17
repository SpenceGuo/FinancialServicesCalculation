<?php
 
require_once 'curl.func.php';
 
$appkey = '23c3bc4f7dd0a9dd';//你的appkey
$keyword='浦发银行';//utf8 关键字

$url = "https://api.jisuapi.com/news/search?keyword=$keyword&appkey=$appkey";
$result = curlOpen($url, ['ssl'=>true]);
$jsonarr = json_decode($result, true);

if($jsonarr['status'] != 0)
{
    echo $jsonarr['msg'];
    exit();
}
$result = $jsonarr['result'];
echo $result['keyword'].' '.$result['num']. '<br>';
foreach($result as $val)
{
    echo $val['title'].' '.$val['time'].' '.$val['src'].' '.$val['category'].' '.$val['pic'].' '.$val['content'].' '.$val['url'].' '.$val['weburl'] . '<br>';
}
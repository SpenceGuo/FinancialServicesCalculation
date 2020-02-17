<?php

require_once 'curl.func.php';
$appkey = '23c3bc4f7dd0a9dd';//你的appkey
//$arr=array('中国中铁', '工商银行', '中国太保', '中国人寿', '中国建筑', '华泰证券', '中国中车', '中国交建', '光大银行', '中国石油');
$arr=array('洛阳钼业');

for($j=0;$j<count($arr);$j++)
{
	$keyword=$arr[$j];
	$filename='txt/'.$keyword.'.txt';
	$myfile = fopen($filename, 'w') or die("Unable to open file!");
	fwrite($myfile, $keyword."\n");

	$url = "https://api.jisuapi.com/news/search?keyword=$keyword&appkey=$appkey";
	$result = curlOpen($url, ['ssl'=>true]);
	$jsonarr = json_decode($result, true);
	
	$res = $jsonarr['result'];
	//echo $res['num'];
	$res1 = $res['list'];
	
	if($res['num']>=9)
	{
		for($i=0;$i<10;$i++)
		{
			fwrite($myfile, $res1[$i]['title']."\n");
			fwrite($myfile, $res1[$i]['url']."\n");
//			echo $res1[$i]['title'].' '.$res1[$i]['url']. '<br>';
		}
	}
	else
	{
		for($i=0;$i<$res['num'];$i++)
		{
			fwrite($myfile, $res1[$i]['title']."\n");
			fwrite($myfile, $res1[$i]['url']."\n");
//			echo $res1[$i]['title'].' '.$res1[$i]['url']. '<br>';
		}
	}
	fclose($myfile);
}
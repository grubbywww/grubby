<?php
session_start();
@header('Content-type:text/html;charset=utf-8');
$URL="http://apo2.jpool.intra.sina.com.cn/app/auth/index.php";
$user='yanjie3';
 $password='821024390592';
$f='login';
$cookie_jar = tempnam('.','cookie');


$post_data="username=".$user."&password=".$password."&f=login&sub=%E7%99%BB%E5%BD%95";
$h=array('Referer: http://apo2.jpool.intra.sina.com.cn/app/auth/index.php','Origin: http://apo2.jpool.intra.sina.com.cn','User-Agent:Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36');
$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$URL);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_data);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar);
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_exec($ch);
curl_close($ch);

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,'http://apo2.jpool.intra.sina.com.cn/index.php');
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2,CURLOPT_HTTPHEADER,$h);
curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie_jar);
$orders = curl_exec($ch2);
var_dump($orders);
curl_close($ch2);
?>

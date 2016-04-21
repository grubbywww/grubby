<?php
session_start();
@header('Content-type:text/html;charset=utf-8');
$URL="http://ci-ali.easemob.com/j_acegi_security_check";
$user='wangyanjie';
$password='fgdcc3nqGrPonh3n';
$f='login';
$cookie_jar = tempnam('.','cookie');


$post_data="j_username=".$user."&j_password=".$password."&remember_me=false&from=''";
$h=array('Referer: http://ci-ali.easemob.com/login?from=','Origin: http://ci-ali.easemob.com','User-Agent:Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36');
$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$URL);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_HTTPHEADER,$h);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_data);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar);
curl_setopt($ch, CURLOPT_NOBODY, false);
$a=curl_exec($ch);
curl_close($ch);

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL,'http://ci-ali.easemob.com/j_acegi_security_check');
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2,CURLOPT_HTTPHEADER,$h);
curl_setopt($ch2, CURLOPT_COOKIEFILE, $cookie_jar);
$orders = curl_exec($ch2);
var_dump($a);
curl_close($ch2);
?>

<?php
set_time_limit(0);
$cookie_file=tempnam('./tmp','cookie');//tmp目录需要先建立好
$ch=curl_init();
$login_url='http://ci-ali.easemob.com/j_acegi_security_check';
$curlPost="j_username=wangyanjie&j_password=fgdcc3nqGrPonh3n";
curl_setopt($ch,CURLOPT_URL,$login_url);
//启用时会将头文件的信息作为数据流输出
curl_setopt($ch,CURLOPT_HEADER,0); //设定是否输出页面内容
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1); //设置请求发送方式，post或get，CURLOPT_POST或CURLOPT_GET
curl_setopt($ch,CURLOPT_POSTFIELDS,$curlPost);
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file); //保存cookie
curl_exec($ch);
curl_close($ch);
$ch=curl_init();
$login_url2=" http://ci-ali.easemob.com";
curl_setopt($ch,CURLOPT_URL,$login_url2);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,0);
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file); //读取cookie
curl_exec($ch);
curl_close($ch);
?>

<?php
$ips = explode(',', GetIP());
$ip = $ips[0];

$url_num = get_url_num();

$h_scheme="/^(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:\/~\+#]*[\w\-\@?^=%&\/~\+#])?$/";
$n_scheme="/^[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:\/~\+#]*[\w\-\@?^=%&\/~\+#])?$/";
if (preg_match($n_scheme, $url))
        $url = 'http://' . $url;    
$myhost = array($_SERVER['HTTP_HOST'], $host); 
$info = parse_url($url);

if (in_array($info['host'],$myhost)) {
    redirect($blog);
}

if (preg_match($h_scheme, $url)) {
    $mysql = new SaeMysql();
    if (preg_match($n_scheme, $url))
        $url = 'http://' . $url;
    $maked = true;
    $maked_url = make_url($url, $ip);
    require 'unurl.tpl';
}
else {
    $maked = false;
    require 'unurl.tpl'; 
}


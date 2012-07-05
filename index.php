<?php
require 'lib.php';
require 'config.php';

$url = parse_url(GetCurUrl());
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    switch ($url['path']) {
        case "/":
            $url_num = get_url_num();
            require 'index.tpl';
            break;
        default:
            $id = code2id(str_replace('/','',$url['path']));
            $mysql = new SaeMysql();

            $sql = "SELECT * FROM `shorted` where url_id=$id";
            $data = $mysql->getData($sql);
            if($data[0])
                redirect($data[0]['url']);
            else
                redirect('http://'.$host);
    }
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch ($url['path']) {
        case "/":
            $url = strip_tags( $_REQUEST['url'] );
            require 'makeUrl.php';
            break;
        default:
            redirect('http://'.$host);
    }
}
else {
    redirect('http://'.$host);
}
function GetCurUrl() 
{ 
    if(!empty($_SERVER["REQUEST_URI"])) 
    { 
        $scrtName = $_SERVER["REQUEST_URI"]; 
        $nowurl = $scrtName; 
    } 
    else 
    { 
        $scrtName = $_SERVER["PHP_SELF"]; 
        if(empty($_SERVER["QUERY_STRING"])) 
        { 
            $nowurl = $scrtName; 
        } 
        else 
        { 
            $nowurl = $scrtName."?".$_SERVER["QUERY_STRING"]; 
        } 
    } 
    return $nowurl; 
} 


<?php
function id2url($dec) {
    global $basestring,$host;
    $result = '';   
  
    do {   
        $result = $basestring[$dec % 64] . $result;   
        $dec = intval($dec / 64);   
    } while ($dec != 0);   
  
    return 'http://'.$host.'/'.$result;   
}

function code2id($dec) {
    global $basestring;
    $result = 0;

    $len = strlen($dec);
    for ($i = 0; $i < $len; $i++) {
        $key = $dec[$len-$i-1];
        $result = $result+strpos($basestring, $key)*pow(64,$i);
    }

    return $result;
}

function redirect($url) {
    header("Location: $url");
    exit;
}

function get_url_num() {
    $mysql = new SaeMysql();

    $sql = "SELECT * FROM `shorted` order by `url_id` desc limit 1";
    $data = $mysql->getData( $sql );
    return $data[0]['url_id'];
}

function make_url($url, $ip) {
    $mysql = new SaeMysql();

    $sql = "SELECT * FROM `shorted` where url='$url' LIMIT 10";
    $data = $mysql->getData( $sql );
    if (!$data) {
        $sql = "INSERT  INTO `shorted` ( `url` , `ip` ) VALUES ( '"  . $mysql->escape( $url ) . "' , '" . $ip . "' ) ";
        $mysql->runSql( $sql );
        if( $mysql->errno() != 0 )
        {
            die( "Error:" . $mysql->errmsg() );
        }
        $mysql->closeDb();  
        $mysql = new SaeMysql();
        $sql = "SELECT * FROM `shorted` where url='$url' LIMIT 10";
        $data = $mysql->getData( $sql );
        $maked_url = id2url($data[0]['url_id']);
    }
    else {
        $maked_url = id2url($data[0]['url_id']);
    }
    $mysql->closeDb();
    return $maked_url;    
}

function GetIP(){ 
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
        $ip = getenv("HTTP_CLIENT_IP"); 
    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
        $ip = getenv("HTTP_X_FORWARDED_FOR"); 
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
        $ip = getenv("REMOTE_ADDR"); 
    else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
        $ip = $_SERVER['REMOTE_ADDR']; 
    else 
        $ip = "unknown"; 
    return($ip); 
} 

<?php
$mysql = new SaeMysql();

$sql = "SELECT * FROM `config` LIMIT 1";
$data = $mysql->getData( $sql );     

$blog = 'http://blog.os.io/2012/05/vurl/';

if($data[0]){
    $basestring = $data[0]['basestring'];
    $host = $data[0]['host'];
    $mysql->closeDb();  
}
else {
    $mysql->closeDb();  
    redirect('/setup.php');
}

<?php 
require 'lib.php';
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['url'])) {
        $url = strip_tags($_GET['url']);
        require 'makeUrl.php';
    }
    else {
        redirect('http://'.$host);
    }
}
else {
    redirect('http://'.$host);
}

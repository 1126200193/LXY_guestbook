<?php
define('SYY', 1);
require 'config.php';
require 'include/db.class.php';
$message =array();
$message['customname'] = $_POST['username'];
$message['mail'] = $_POST['mail'];
$message['umsg'] = $_POST['message'];
$message['uua']  = getUA();
$message['uip']   = getIP();
$message['utime'] = time();

$sql = "INSERT INTO `messages` (`uid`,`customname`,`umail`,`umsg`,`uua`,`uip`,`utime`)
		VALUES 
							   (NULL,'{$message['customname']}','{$message['mail']}','{$message['umsg']}','{$message['uua']}','{$message['uip']}','{$message['utime']}')
		";
if ($con->query($sql) === TRUE) {
    exit(json_encode(array('code'=>'留言成功')));
} else {
    exit(json_encode(array('code'=>'留言失败')));
}


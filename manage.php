<?php
header('Content-type:text/json;charset=utf-8');
session_start();
require_once('connectsql.php');

if(isset($_POST['action'])){
    $action = $_POST['action'];
    //注册校验用户是否已经存在
    if ($action == 'user') {
        //查询用户信息
        if (!isset($_SESSION['userid']))
            exit();

        $userid = $_SESSION['userid'];
        $sql = "SELECT userid,customname,username FROM userlist WHERE userid='$userid'";
        $result = $db->query($sql);
        exit(json_encode($result->fetch_assoc()));
    }


    //登陆校验账户密码是否正确
    if($action == 'login'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT userid FROM userlist WHERE username='$username' AND password='$password'";
        $result = $db->query($sql);
        if ($user = $result->fetch_assoc()) {
            $_SESSION['userid'] = $user['userid'];
            exit(json_encode(array('code'=>'登陆成功')));
        }
        else
            exit(json_encode(array('code'=>0, 'msg'=>'用户名或密码错误')));
    }
}
<?php
$username = $_POST['user'];
$name = $_POST['name'];
$password = $_POST['pass'];
//$password1 = $_POST['password1'];

//if(!$username)
//    exit('<script>alert("请输入用户名!");history.back();</script>');
//if(!$password)
//    exit('<script>alert("请输入密码!");history.back();</script>');
//if(!$password1)
//    exit('<script>alert("请确认密码!");history.back();</script>');
//if($password != $password1)
//    exit('<script>alert("两次输入密码不一致!");history.back();</script>');

require_once('connectsql.php');
$sql = "SELECT username FROM userlist WHERE username = '$username'";
$result = $db->query($sql);
if ($result->num_rows === 0) {
    $sql = "INSERT INTO userlist
            (customname,username,password)
            VALUES('$name','$username','$password')";
    if ($res = $db->query($sql))
        exit(json_encode(array('code'=>'注册成功')));
    else
        exit(json_encode(array('code'=>0, 'msg'=>'注册失败')));
}
else {
    exit(json_encode(array('code'=>3)));
}

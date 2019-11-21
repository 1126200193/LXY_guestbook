<?php
require_once('connectsql.php');
//连接数据库
header('Content-Type: text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
header('Access-Control-Allow-Headers:x-requested-with,content-type');
//设置允许JS跨域
$con=mysqli_connect("localhost","root","123456","board");
$sqlStr = "SELECT * FROM messages";
$sql=mysqli_query($con,$sqlStr);
$info=mysqli_fetch_object($sql);
//查询结果并返回当前指针对象到$info（这里用的mysqli函数，实际也可以用PDO）
do{
    $arr_temp = array(
        "uid"=>$info->uid,
        "customname"=>$info->customname,
        "umsg"=>$info->umsg,
        "utime"=>$info->utime
    );
    $json_arr[] = $arr_temp;
}while($info=mysqli_fetch_object($sql));
//遍历数据库，数组嵌套

$json_obj = json_encode($json_arr);
//数组转JSON格式

echo $json_obj;
//输出
?>
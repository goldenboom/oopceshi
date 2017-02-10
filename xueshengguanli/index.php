<?php
//主入口文件
header("Content-Type:text/html;charset=utf-8");
//自动加载控制器
function __autoload($name){
	
	include("controller/".$name.".class.php");
	
}
//加载配置信息
include("config/config.php");

//加载model层
include("model/mysqlceshiFamily.class.php");

//类
$c = empty($_GET["c"])?"lists":$_GET["c"];

//方法
$a = empty($_GET["a"])?"listslink":$_GET["a"];

$ceshi = new $c(); 
// 判断这个方法是否存在

	echo $ceshi	->$a();
	



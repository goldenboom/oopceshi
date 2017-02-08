<?php
//主入口文件
header("Content-Type:text/html;charset=utf-8");
session_start();
//加载配置信息
include("config/config.php");

//加载model层
include("model/model.php");

//取是控制器名字
//?c=index&a=index&m=ceshi
$c = empty($_GET["c"])?"news_info":$_GET["c"];

//加载控制器模板
include("controller/".$c.".php");

//取得控制器中的方法 $_REQUEST
$a = empty($_GET["a"])?"lists":$_GET["a"];


//判断这个方法是否存在

if(function_exists($a)){
	//调用这个方法
	echo $a();
	
}else{
	//echo $a."这个方法不存在<a href='?c=user&a=lists'>返回</a>";
	header("location:?c=public&a=login");
}



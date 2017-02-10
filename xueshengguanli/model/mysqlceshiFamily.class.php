<?php
header("Content-Type:text/html;charset=utf-8");
	class mysqlceshiFamily{
		public $ip="127.0.0.1";
		public $root="root";
		public $password ="";
		public $DBNAME="company";
	
		public $con ;
		//抽象成员属性sql语句
		public $sql;
		//修删改查的结果集
		public $select;
		public $insert;
		public $remove;
		public $update;
		public function __construct(){
				$this ->con=@mysql_connect($this->ip,$this->root,$this->password) or die("未连接");
			
				$dbname = mysql_select_db($this ->DBNAME,$this ->con);
				
				mysql_set_charset("utf8");
		}
		
		public function __destruct(){
			

			mysql_close($this -> con);

		}
		//抽象查询方法
		public function selectfangfa(){
			//实例化一个数据库控制类  存在构造方法和析构方法 执行打开和关闭数据库
			
			//解析数据
			$result = mysql_query($this ->sql);
		
			
			//遍历数据
			while($row = @mysql_fetch_assoc($result)){
				
				$over[] = $row;
				
			}
			//结果集返回值变成成员属性
			$this->select = $over;
			return $this->select;
		}
			
		public function insertfangfa(){
		
			
			//执行sql语句
			$result = mysql_query($this ->sql);
			//上次插入的id
			$over = mysql_insert_id();
			//插入的id返回值赋给成员属性 
			return $this ->insert;
		}
		public function removefangfa(){
			$result = mysql_query($this ->sql);
			$over = mysql_affected_rows();
			//上次操作的行数返回值变成成员属性
			return $over;
			
		}
		public function updatefangfa(){
			$result = mysql_query($this ->sql);
			$over = mysql_affected_rows ();
			//上次操作的行数返回值变成成员属性
			return $this ->update;
			
		}
		
	}
	function zengshangaicha($sql){
			//判断现在所执行的sql语句属于增删改查的哪一个。
			if(substr($sql,0,6)=="select"){
				$zsgcName = "select";                                 
			}elseif(substr($sql,0,6)=="insert"){                    
				$zsgcName = "insert";                                 
			}elseif(substr($sql,0,6)=="delete"){
				$zsgcName = "remove";
			}elseif(substr($sql,0,6)=="update"){
				$zsgcName = "update";
			}
			
			//实例化一个对象mysql测试
			$mysqlceshi = new mysqlceshiFamily();
			//实例化sql语句加入成员属性
			$mysqlceshi -> sql = $sql;
			//执行sql语句实例化 所执行的方法的函数名是刚才判断的sql语句所属类目
			$a_A=$zsgcName."fangfa";
			
			return $mysqlceshi -> $a_A();
			
			//实例化一个成员属性  属性名为刚才判断的sql语句所属类目   属性内容为返回的结果集
			
			
	}
	
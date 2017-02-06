<?php
	header("Content-Type:text/html;charset=utf-8");
	//抽象一个类 dog
	class Dog{
		//属性名字
		public $name = "Huskie";
		//属性类型
		public $type = "dog";
		//属性年龄
		public $age = "3";
		//属性性别
		public $sex = "boy";
		//方法跳舞
		public function dance(){
			//哈士奇是一只狗，它今年三岁，它是一只公狗，它会跳舞。
			return $this -> name . " is a ". $this -> type . ",it is " .$this -> age . " years old this year, it is a " . $this -> sex . ",it can dance.<br/>"; 
			
		}
		
	}
	class Person{
		//属性名字
		public $name = "Tom";
		//属性年龄
		public $age = "32";
		//属性性别
		public $sex = "man";
		//方法信息
		public function info(){
			
			return $this -> name ." is ".$this -> age ." years old this year,He is a ".$this -> sex .".<br />";
			
		}
		//方法拥有
		public function have(){
			//实例化一只狗 
			$dog = new Dog();
			//读出狗狗的名字
			return $this -> name ." have a ". $dog ->type .".<br />";
			
		}
	}
	//实例化一个人
	$person = new Person();
	//实例化一只狗
	$Dog = new Dog ();
	//拥有
	echo $person ->have();
	//资料
	echo $person ->info();
	//动作
	echo $Dog ->dance();
	$xiaohong = new person();
	$bigdog = new Dog();
	//实例化小红
	$xiaohong -> name ="Xiaohong";
	$xiaohong -> age ="18";
	$xiaohong -> sex ="girl";
	//实例化大狗coco
	$bigdog ->name ="coco";
	$bigdog ->age ="1";
	$bigdog ->sex ="girl";
	//调用拥有
	echo $xiaohong ->have();
	//调用信息
	echo $xiaohong ->info();
    //调用大狗会跳舞
	echo $bigdog ->dance();
	
	
	
	
	
	
	
	
	
	
	
	
	//mysql 测试    ***时间关系未完成  可优化    sql语句可带入类属性 会报错因为未带入控制器***
	class dbdb{
		public $ip;
		public $root;
		public $password;
		public $DBNAME;
		public function connect(){
				
				$link = @mysql_connect($this->ip,$this->root,$this->password) or die("未连接");
				
				$dbname = mysql_select_db($this ->DBNAME,$link);
				
				mysql_set_charset("utf8");
				
				return $link;
			
		}
		
		public function close($link){
	
			mysql_close($link);
			
		}
		
	}
	class mysqlceshi{
		
		
		public function select($sql){
			
				
			$result = mysql_query($sql);
			if(empty($result)){
				$shuju="";
			
			}else{
				$shuju=array();
				while($row = @mysql_fetch_assoc($result)){
					
					$shuju[] = $row;
					
				}
			}
			return $shuju;
			
		}
		public function insert($sql){
	
			$link = connect();
			
			$result = mysql_query($sql);
			
			$id = mysql_insert_id();
			
			close($link);
			
			return $id;
			
		}
		public function remove($sql){
	
			$link = connect();
			
			$result = mysql_query($sql);
			
			$id = mysql_affected_rows();
			
			close($link);
			return $id;
		}
		public function update($sql){
	
			$link = connect();
			
			$result = mysql_query($sql);
			
			$id = mysql_affected_rows();
			
			close($link);
			
			return $id;
			
		}
	}
	
	
	
	
	
	
	//实例化mysql测试---------分别带入控制器中-------------------------------------------查询
	$dbdb = new dbdb();
	//-----------------------开启数据库
	$link = $dbdb ->connect();
	//查询数据库
	$sql="select * from nav";
	$resul = $mysqlceshi ->select($sql);
	//-----------------------关闭数据库
	$dbdb ->close($link);
	
	
	
	
	
	
	
	//实例化mysql测试----------------------------------------------------添加
	$dbdb = new dbdb();
	//-----------------------开启数据库
	$link = $dbdb ->connect();
	//添加
	$sql="insert into nav(name,url)value('$name','$url')";	
	$result = $mysqlceshi ->insert($sql);
	//-----------------------关闭数据库
	$dbdb ->close($link);
	
	
	
	
	
	//实例化mysql测试----------------------------------------------------删除
	$dbdb = new dbdb();
	//-----------------------开启数据库
	$link = $dbdb ->connect();
	//删除
	$sql="delete from nav where id=$id";
	$mysqlceshi ->remove();
	//-----------------------关闭数据库
	$dbdb ->close($link);
	
	
	
	
	//实例化mysql测试----------------------------------------------------修改
	$dbdb = new dbdb();
	//-----------------------开启数据库
	$link = $dbdb ->connect();
	//修改
	$sql = "select * from nav where id = $id";
	$arr = $mysqlceshi ->update();
	//-----------------------关闭数据库
	$dbdb ->close($link);
	
	
	
	
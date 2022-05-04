<?php
	class Connect{

		public static $instance;
		public function __construct(){
		}
		
		public static function get_instance(){
			$host = "ec2-44-196-223-128.compute-1.amazonaws.com";
			$database = "d3ggcm26rhrf20";
			$user = "vqcrxgjddyoair";
			$password = "91953cacf5ce8fd79a82d83cfcd880d72016a0bd69bc113b1d51052121617553";


			if(!isset(self::$instance)){
				self::$instance = new PDO("pgsql:host=$host;dbname=$database;", $user, $password);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			}

			return self::$instance;
		}
	}
?>

<?php 
	class LogoutController{
		public function index(){
			//huy cac gia tri
			unset($_SESSION["email"]);
			unset($_SESSION["fullname"]);
			unset($_SESSION["acid"]);
			//quay tro ve trang index.php
			header("location:index.php");
		}
	}
 ?>
<?php 
	trait LoginModel{
		//lay mot ban ghi
		public function modelFetch(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select fullname,role,account_id,email from tbl_account where email=:mail and password=:pass");
			//thuc hien truy van co truyen danh sach bien
			$query->execute(array("mail"=>$email,"pass"=>$password));
			//lay mot ban ghi
			$result = $query->fetch();
			return $result;
			//---
		}
	}
 ?>
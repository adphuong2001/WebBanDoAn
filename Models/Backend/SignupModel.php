<?php 
	trait SignupModel{
		//lay mot ban ghi
		public function modelFetch(){
            $name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//kiem tra email ton tai
			$query1 = $conn->prepare("select account_id from tbl_account where email=:mail");
			//thuc hien truy van co truyen danh sach bien
			$query1->execute(array("mail"=>$email));
			$res = $query1->fetch();
			if(isset($res->account_id) == false){
				//chuan bi truy van
				$query = $conn->prepare("insert into tbl_account set fullname=:name,email=:mail,password=:pass,address=:add,phone=:phon,role='customer'");
				//thuc hien truy van co truyen danh sach bien
				$query->execute(array("name"=>$name,"mail"=>$email,"pass"=>$password,"add"=>$address,"phon"=>$phone));
			}
			else{
				echo "<script>alert(\"Email đã tồn tại\");document.location = 'index.php?area=Backend&controller=Login';</script>";
			}
			return $res;
		}
	}
 ?>
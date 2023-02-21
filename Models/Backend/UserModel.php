<?php 
	trait UserModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll($from, $pageSize){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_account order by account_id asc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select account_id from tbl_account");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_account where account_id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();

			$name = $_POST["name"];
			$password = $_POST["password"];
			$phone = $_POST["phone"];
			$add = $_POST["address"];
			$role = $_POST["role"];
			//update ban ghi
			//chuan bi truy van
			$query = $conn->prepare("update tbl_account set fullname=?, address=?, phone=?, role=? where account_id=?");
			$query->bindValue(1, $name);  
			$query->bindValue(2, $add);  
			$query->bindValue(3, $phone);    
			$query->bindValue(4, $role);  
			$query->bindValue(5, $id);  
			//thuc thi truy van
			$query->execute();
			if($password != ''){
				$query = $conn->prepare("update tbl_account set password=? where account_id=?");
				$query->bindValue(1, $password); 
				$query->bindValue(2, $id); 
				$query->execute();
			}
		}
		//insert ban ghi
		public function insert(){
			$name = $_POST["name"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$add = $_POST["address"];
			$role = $_POST["role"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$stmt = $conn->prepare("insert into tbl_account(fullname,email,password,phone,address,role) value(?,?,?,?,?,?)");  
			$stmt->bindValue(1, $name);  
			$stmt->bindValue(2, $email);  
			$stmt->bindValue(3, $password);  
			$stmt->bindValue(4, $phone);  
			$stmt->bindValue(5, $add);  
			$stmt->bindValue(6, $role);  
			$stmt->execute(); 			
		}
		//delete
		public function deleteUser($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_account where account_id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>
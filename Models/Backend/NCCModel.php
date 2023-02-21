<?php 
	trait NCCModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_supplier order by MaNCC asc");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_supplier where MaNCC=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();

			$ten = $_POST["TenNCC"];
			$mail = $_POST["MailNCC"];
			$add = $_POST["DiaChi"];
            $sdt = $_POST["SĐT"];
			//update ban ghi
			//chuan bi truy van
			$query = $conn->prepare("update tbl_supplier set TenNCC=?, MailNCC=?, DiaChi=?, SĐT=? where MaNCC=?");
			$query->bindValue(1, $ten);  
			$query->bindValue(2, $mail);  
			$query->bindValue(3, $add);    
            $query->bindValue(4, $sdt);    
			$query->bindValue(5, $id);  
			//thuc thi truy van
			$query->execute();
		}
		//insert ban ghi
		public function insert(){
			$name = $_POST["TenNCC"];
			$email = $_POST["MailNCC"];
			$phone = $_POST["SĐT"];
			$add = $_POST["DiaChi"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$stmt = $conn->prepare("insert into tbl_supplier(TenNCC,MailNCC,SĐT,DiaChi) value(?,?,?,?)");  
			$stmt->bindValue(1, $name);  
			$stmt->bindValue(2, $email);  
			$stmt->bindValue(3, $phone);  
			$stmt->bindValue(4, $add);  
			$stmt->execute(); 			
		}
		//delete
		public function deleteNCC($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_supplier where MaNCC=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>
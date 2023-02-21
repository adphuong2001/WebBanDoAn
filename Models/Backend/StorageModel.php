<?php 
	trait StorageModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_storage order by MaKho asc");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_storage where MaKho=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();

			$ten = $_POST["TenKho"];
			$add = $_POST["DiaChi"];
			//update ban ghi
			//chuan bi truy van
			$query = $conn->prepare("update tbl_storage set TenKho=?, DiaChi=? where MaKho=?");
			$query->bindValue(1, $ten);   
			$query->bindValue(2, $add);     
			$query->bindValue(3, $id);  
			//thuc thi truy van
			$query->execute();
		}
		//insert ban ghi
		public function insert(){
			$name = $_POST["TenKho"];
			$add = $_POST["DiaChi"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$stmt = $conn->prepare("insert into tbl_storage(TenKho,DiaChi) value(?,?)");  
			$stmt->bindValue(1, $name);  
			$stmt->bindValue(2, $add);  
			$stmt->execute(); 			
		}
		//delete
		public function deleteStorage($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_storage where MaKho=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>
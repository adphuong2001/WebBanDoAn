<?php 
	trait NewsModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_news order by MaTinTuc asc");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_news where MaTinTuc=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();

			$name = $_POST["TenTicTuc"];
			$nd = $_POST["NoiDung"];
			//update ban ghi
			//chuan bi truy van
			$query = $conn->prepare("update tbl_news set TenTinTuc=?, NoiDung=? where MaTinTuc=?");
			$query->bindValue(1, $name);  
			$query->bindValue(2, $nd);  
            $query->bindValue(3, $id);  
			//thuc thi truy van
			$query->execute();
		}
		//insert ban ghi
		public function insert(){
			$name = $_POST["TenTinTuc"];
			$nd = $_POST["NoiDung"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$stmt = $conn->prepare("insert into tbl_news(TenTinTuc,NoiDung) value(?,?)");  
			$stmt->bindValue(1, $name);  
			$stmt->bindValue(2, $nd);
			$stmt->execute(); 			
		}
		//delete
		public function deleteNews($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_news where MaTinTuc=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>
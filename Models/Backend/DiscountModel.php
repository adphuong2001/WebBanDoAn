<?php 
	trait DiscountModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_discount order by MaGG asc");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_Discount where MaGG=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();

			$gg = $_POST["GiaGiam"];
			$sl = $_POST["SoLuong"];
            $detail = $_POST["ChiTiet"];
			$ngaybd = $_POST["NgayBatDau"];
            $ngaykt = $_POST["NgayKetThuc"];
            $status = $_POST["TrangThai"];
			//update ban ghi
			//chuan bi truy van
			$query = $conn->prepare("update tbl_discount set GiaGiam=?, SoLuong=?, ChiTiet=?, NgayBatDau=?, NgayKetThuc=?, TrangThai=? where MaGG=?");
			$query->bindValue(1, $gg);  
			$query->bindValue(2, $sl);  
			$query->bindValue(3, $detail);    
            $query->bindValue(4, $ngaybd);    
			$query->bindValue(5, $ngaykt);  
            $query->bindValue(6, $status);  
            $query->bindValue(7, $id);  
			//thuc thi truy van
			$query->execute();
		}
		//insert ban ghi
		public function insert(){
			$gg = $_POST["GiaGiam"];
			$sl = $_POST["SoLuong"];
            $detail = $_POST["ChiTiet"];
			$ngaybd = $_POST["NgayBatDau"];
            $ngaykt = $_POST["NgayKetThuc"];
            $status = $_POST["TrangThai"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$stmt = $conn->prepare("insert into tbl_discount(GiaGiam,SoLuong,ChiTiet,NgayBatDau,NgayKetThuc,TrangThai) value(?,?,?,?,?,?)");  
			$stmt->bindValue(1, $gg);  
			$stmt->bindValue(2, $sl);  
			$stmt->bindValue(3, $detail);    
            $stmt->bindValue(4, $ngaybd);    
			$stmt->bindValue(5, $ngaykt);  
            $stmt->bindValue(6, $status); 
			$stmt->execute(); 			
		}
		//delete
		public function deleteDiscount($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_discount where MaGG=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>
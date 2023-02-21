<?php 
	trait MaterialModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_material order by MaNL asc");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_material where MaNL=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();

			$mak = $_POST["MaKho"];
			$man = $_POST["MaNCC"];
			$name = $_POST["TenNL"];
			$price = $_POST["GiaTien"];
			$sl = $_POST["SoLuong"];
			$ngaynhap = $_POST["NgayNhap"];
            $hsd = $_POST["HanSuDung"];
			$anh = $_POST["AnhNL"];
			//update ban ghi
			//chuan bi truy van
			$query = $conn->prepare("update tbl_material set MaKho=?, MaNCC=?, TenNL=?, GiaTien=?, SoLuong=?, NgayNhap=?, HanSuDung=?, AnhNL=? where MaNL=?");
			$query->bindValue(1, $mak);  
			$query->bindValue(2, $man);  
			$query->bindValue(3, $name);  
			$query->bindValue(4, $price);  
			$query->bindValue(5, $sl);  
			$query->bindValue(6, $ngaynhap);  
			$query->bindValue(7, $hsd);  
			$query->bindValue(8, $anh);  
			$query->bindValue(9, $id);  
			//thuc thi truy van
			$query->execute();
		}
		//insert ban ghi
		public function insert(){
			$mak = $_POST["MaKho"];
			$man = $_POST["MaNCC"];
			$name = $_POST["TenNL"];
			$price = $_POST["GiaTien"];
			$sl = $_POST["SoLuong"];
			$ngaynhap = $_POST["NgayNhap"];
            $hsd = $_POST["HanSuDung"];
			$anh = $_POST["AnhNL"];
			//update ban ghi
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$stmt = $conn->prepare("insert into tbl_material(MaKho,MaNCC,TenNL,GiaTien,SoLuong,NgayNhap,HanSuDung,AnhNL) value(?,?,?,?,?,?,?,?)");  
			$stmt->bindValue(1, $mak);  
			$stmt->bindValue(2, $man);  
			$stmt->bindValue(3, $name);  
			$stmt->bindValue(4, $price);  
			$stmt->bindValue(5, $sl);  
			$stmt->bindValue(6, $ngaynhap);  
			$stmt->bindValue(7, $hsd);  
			$stmt->bindValue(8, $anh);  
			$stmt->execute(); 			
		}
		//delete
		public function deleteMaterial($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_material where MaNL=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>
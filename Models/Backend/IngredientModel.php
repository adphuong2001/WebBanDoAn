<?php 
	trait IngredientModel{
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

			$name = $_POST["TenNL"];
            $price = $_POST["GiaTien"];
			$sl = $_POST["SoLuong"];
			$unit = $_POST["Unit"];
            $KID = $_POST["MaKho"];
            $NID = $_POST["MaNCC"];
            $ngaynhap = $_POST["importdate"];
            $hsd = $_POST["expirydate"];
            $img = "";
			//update ban ghi
			//chuan bi truy van
			$query = $conn->prepare("update tbl_material set MaKho=?, MaNCC=?, TenNL=?, GiaTien=?, SoLuong=?, Unit=?, NgayNhap=?, HanSuDung=? where MaNL=?");
			$query->bindValue(1, $KID);  
			$query->bindValue(2, $NID);  
            $query->bindValue(3, $name);  
            $query->bindValue(4, $price);  
			$query->bindValue(5, $sl);  
			$query->bindValue(6, $unit);  
            $query->bindValue(7, $ngaynhap);  
            $query->bindValue(8, $hsd);  
            $query->bindValue(9, $id);  
			//thuc thi truy van
			$query->execute();
            if($_FILES["AnhNL"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$query = $conn->prepare("select AnhNL from tbl_material where MaNL=:id");
				$query->execute(array("id"=>$id));
				//lay mot ban ghi
				$old_img = $query->fetch();
				if(isset($old_img->AnhNL)&&$old_img->AnhNL!=""&&file_exists("Assets/upload/material/".$old_img->AnhNL))
					unlink("Assets/upload/material/".$old_img->AnhNL);
				//---
				$img = $_FILES["AnhNL"]["name"];
				//upload anh
				move_uploaded_file($_FILES["AnhNL"]["tmp_name"], "Assets/upload/material/$img");
				//update field img
				$query = $conn->prepare("update tbl_material set AnhNL=:img where MaNL=:id");
				$query->execute(array("img"=>$img,"id"=>$id));
			}		
		}
		//insert ban ghi
		public function insert(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$name = $_POST["TenNL"];
            $price = $_POST["GiaTien"];
			$sl = $_POST["SoLuong"];
			$unit = $_POST["Unit"];
            $KID = $_POST["MaKho"];
            $NID = $_POST["MaNCC"];
            $ngaynhap = $_POST["importdate"];
            $hsd = $_POST["expirydate"];
            $img = "";
			//update ban ghi
            if($_FILES["AnhNL"]["name"] != ""){
				$img = $_FILES["AnhNL"]["name"];
				//upload anh
				move_uploaded_file($_FILES["AnhNL"]["tmp_name"], "Assets/upload/material/$img");				
			}

            print_r($KID." ".$NID." ".$name." ".$price." ".$ngaynhap." ".$hsd." ".$img);
            $query = $conn->prepare("insert into tbl_material set MaKho=:MaKho, MaNCC=:MaNCC,TenNL=:TenNL, GiaTien=:GiaTien,NgayNhap=:NgayNhap,HanSuDung=:HanSuDung,AnhNL=:AnhNL");
			$query->execute(array("MaKho"=>$KID,"MaNCC"=>$NID,"TenNL"=>$name,"GiaTien"=>$price,"SoLuong"=>$sl,"Unit"=>$unit,"NgayNhap"=>$ngaynhap,"HanSuDung"=>$hsd,"AnhNL"=>$img));
		}
		//delete
		public function deleteIngredient($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_material where MaNL=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>
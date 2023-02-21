<?php
	trait CartModel{		
		public function cartAdd($id){
		    if(isset($_SESSION['cart'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //$product = db::get_one("select * from tbl_product where id=$id");
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from tbl_product where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['cart'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'img' => $product->img,
		            'number' => 1,
		            'price' => $product->price
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cartUpdate($id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$id]);
		    } else {
		        $_SESSION['cart'][$id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cartDelete($id){
		    unset($_SESSION['cart'][$id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cartTotal(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cartNumber(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cartList(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cartDestroy(){
		    $_SESSION['cart'] = array();
		}
		//=============
		//checkout
		public function cartCheckOut(){
			$conn = Connection::getInstance();
			$customer_id = $_SESSION["acid"];
			//---
			//---
			//insert ban ghi vao tbl_order, lay order_id vua moi insert
			$query = $conn->prepare("insert into tbl_order set customer_id=:customer_id, create_at=now()");
			$query->execute(array("customer_id"=>$customer_id));
			//lay id vua moi insert
			$order_id = $conn->lastInsertId();
			//---
			$check=true;
			foreach($_SESSION["cart"] as $product){
				$conn = Connection::getInstance();
				$stmt = $conn->prepare("select tbl_material.SoLuong as 'MSL',tbl_recipe.SoLuong as 'RSL'
										from tbl_material inner join tbl_recipe 
										on tbl_material.MaNL = tbl_recipe.Mat_ID
										where tbl_recipe.Pro_ID=:id");
				//thuc thi truy van
				$stmt->execute(array("id"=>$product["id"]));
				$min=100000;
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					if($row["MSL"] == 0) $min=0;
					if($min > floor($row["MSL"]/$row["RSL"]))
						$min = floor($row["MSL"]/$row["RSL"]);
				}
				if($min == 0){
					unset($_SESSION["cart"][$product["id"]]);
					echo "<script>alert(\"".$product["name"]." đã hết!\");window.location = 'index.php?controller=Cart';</script>";
				}
				if($product["number"] > $min){
					$check = false;
					echo "<script>alert(\"Còn ".$min." ".$product["name"]."! Vui lòng chọn lại số lượng\");window.location = 'index.php?controller=Cart';</script>";
				}
			}
			//duyet cac ban ghi trong session array de insert vao tbl_order_detail
			if($check == true){
				foreach($_SESSION["cart"] as $product){
					$query = $conn->prepare("insert into tbl_order_detail set order_id=:order_id, product_id=:product_id, price=:price, number=:number");
					$query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"],"price"=>$product["price"],"number"=>$product["number"]));
					$stmt = $conn->prepare("select Mat_ID,SoLuong 
										from tbl_recipe
										where Pro_ID=:id");
					//thuc thi truy van
					$stmt->execute(array("id"=>$product["id"]));
					
					while($res = $stmt->fetch(PDO::FETCH_ASSOC)){
						$query1 = $conn->prepare("update tbl_material set tbl_material.SoLuong = (tbl_material.SoLuong-(?*?)) where MaNL=?");
						$query1->bindValue(1, $res["SoLuong"]);   
						$query1->bindValue(2, $product["number"]);   
						$query1->bindValue(3, $res["Mat_ID"]);   
						$query1->execute();
					}
				}
				//xoa gio hang
				unset($_SESSION["cart"]);
				echo "<script>window.confirm(\"Không được hủy đơn hàng\");alert(\"Thanh toán thành công\");window.location = 'index.php?controller=Cart';</script>";
			}
		}
		//=============
	}	
?>
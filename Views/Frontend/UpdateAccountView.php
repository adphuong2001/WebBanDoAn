<?php 
	$this->fileLayout = "views/frontend/layout_trangtrong.php";
	$conn = Connection::getInstance();
	$stmt = $conn->prepare("select * from tbl_account where account_id = ?");  
	$stmt->bindValue(1, $_SESSION["acid"]);  
	$stmt->execute();  
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
 ?>
 <div class="col-md-8 col-md-offset-2" style="margin-top: 30px;">
 	<form method="post" action="index.php?area=backend&controller=User&action=doUpdate&id=<?php echo $_SESSION["acid"];?>">
 		<div class="panel panel-primary">
 			<div class="panel-heading">Cập nhật thông tin</div>
 			<div class="panel-body">
	 		<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Họ tên</div>
		 		<div class="col-md-10"><input type="text"  required name="fullname" class="form-control" value="<?php echo $row['fullname'];?>"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Email</div>
		 		<div class="col-md-10"><input type="text" required name="email" class="form-control" value="<?php echo $row['email'];?>"></div>
		 	</div>
		 	<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Mật khẩu</div>
		 		<div class="col-md-10"><input type="password" required name="password" class="form-control" value="<?php echo $row['password'];?>"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Địa chỉ</div>
		 		<div class="col-md-10"><input type="text" required name="address" class="form-control" value="<?php echo $row['address'];?>"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2">Số điện thoại</div>
		 		<div class="col-md-10"><input type="text" required name="phone" class="form-control" value="<?php echo $row['phone'];?>"></div>
		 	</div>
		 	<!-- end row -->
		 	<!-- row -->
		 	<div class="row" style="margin-bottom: 5px;">
		 		<div class="col-md-2"></div>
		 		<div class="col-md-10">
					<input type="submit" value="Cập nhật" class="btn btn-primary"> 
					<input type="reset" value="Viết lại" class="btn btn-danger">
				</div>
		 	</div>
		 	<!-- end row -->
		 	</div>
		 </div>
 	</form>
 </div>
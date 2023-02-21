<?php 
	//include file model
	include "Models/Backend/SignupModel.php";
	class SignupController extends Controller{
		//su dung class SignupModel
		use SignupModel;
		public function index(){
			//load view
			$this->renderHTML("Views/Backend/SignupView.php");
		}
		//khi an nut submit
		public function doSignup(){
            $result = $this->modelFetch();
			if(isset($result->account_id)==true){
				echo "<script>alert(\"Email đã tồn tại! Chọn email khác\");window.location = 'index.php?area=Backend&controller=SignUp';</script>";
			}else{
				echo "<script>alert(\"Đăng kí thành công\");window.location = 'index.php?area=Backend&controller=Login';</script>";
				//quay tro lai trang index.php?area=Backend&controller=Login
			}
		}
	}
 ?>
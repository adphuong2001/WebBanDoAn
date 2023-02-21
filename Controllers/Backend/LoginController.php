<?php 
	//include file model
	include "Models/Backend/LoginModel.php";
	class LoginController extends Controller{
		//su dung class LoginModel
		use LoginModel;
		public function index(){
			//load view
			$this->renderHTML("Views/Backend/LoginView.php");
		}
		//khi an nut submit
		public function doLogin(){
			//goi ham lay 1 ban ghi tu class model
			$record = $this->modelFetch();
			if(isset($record->account_id)){
				//gan session fullname, acid
				$_SESSION["fullname"] = $record->fullname;				
				$_SESSION["acid"] = $record->account_id;
				$_SESSION["email"] = $record->email;
				$_SESSION["role"] = $record->role;
			}
			//quay tro lai trang index.php?controller=Backend
			if($record->role == "admin")
				header("location:index.php?area=Backend");
			else 
				header("location:index.php");
		}
	}
 ?>
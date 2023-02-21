<?php 
	//include model
	include "Models/Backend/StorageModel.php";
	class StorageController extends Controller{
		//khai bao de su dung class StorageModel
		use StorageModel;
		//ham tao de xac thuc dang nhap
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$data = $this->fetchAll();
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/StorageView.php",array("data"=>$data));
		}
		//detail Storage
        public function detail(){
			$id = isset($_GET["kid"])&&is_numeric($_GET["kid"]) ? $_GET["kid"] : 0;
			//goi ham trong model de lay 1 ban ghi
			$record = $this->fetch($id);
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=Storage&action=doEdit&kid=$id";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/DetailStorageView.php",array("record"=>$record,"formAction"=>$formAction));
		}
		//do edit Storage
		public function doEdit(){
			$id = isset($_GET["kid"])&&is_numeric($_GET["kid"]) ? $_GET["kid"] : 0;
			//goi ham insert trong model de insert ban ghi
			$this->update($id);
			//quay tro lai duong dan
            echo "<script>alert(\"Cập nhật thông tin thành công\");document.location = 'index.php?area=backend&controller=Storage';</script>";
			//header("location:index.php?area=backend&controller=Storage");
		}
		//add Storage
		public function add(){
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=Storage&action=doAdd";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/AddStorageView.php",array("formAction"=>$formAction));
		}
		//do add Storage
		public function doAdd(){
			//goi ham insert trong model de insert ban ghi
			$this->insert();
			//quay tro lai duong dan
			echo "<script>alert(\"Thêm thông tin kho thành công\");document.location = 'index.php?area=backend&controller=Storage';</script>";
			//header("location:index.php?area=backend&controller=Storage");
		}
		//delete Storage
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteStorage($id);
			//quay tro lai duong dan
			header("location:index.php?area=backend&controller=Storage");
		}
	}
 ?>
<?php 
	//include model
	include "Models/Backend/MaterialModel.php";
	class MaterialController extends Controller{
		//khai bao de su dung class MaterialModel
		use MaterialModel;
		//ham tao de xac thuc dang nhap
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$data = $this->fetchAll();
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/MaterialView.php",array("data"=>$data));
		}
		//edit Material
		public function edit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong model de lay 1 ban ghi
			$record = $this->fetch($id);
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=Material&action=doEdit&id=$id";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/AddEditMaterialView.php",array("record"=>$record,"formAction"=>$formAction));
		}
		//do edit Material
		public function doEdit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham insert trong model de insert ban ghi
			$this->update($id);
			//quay tro lai duong dan
            echo "<script>alert(\"Cập nhật thông tin thành công\");document.location = 'index.php?area=backend&controller=Material';</script>";
			//header("location:index.php?area=backend&controller=Material");
		}
		//add Material
		public function add(){
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=Material&action=doAdd";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/AddEditMaterialView.php",array("formAction"=>$formAction));
		}
		//do add Material
		public function doAdd(){
			//goi ham insert trong model de insert ban ghi
			$this->insert();
			//quay tro lai duong dan
			echo "<script>alert(\"Thêm thông tin Material thành công\");document.location = 'index.php?area=backend&controller=Material';</script>";
			//header("location:index.php?area=backend&controller=Material");
		}
		//delete Material
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteMaterial($id);
			//quay tro lai duong dan
			header("location:index.php?area=backend&controller=Material");
		}
	}
 ?>
<?php 
	//include model
	include "Models/Backend/DiscountModel.php";
	class DiscountController extends Controller{
		//khai bao de su dung class DiscountModel
		use DiscountModel;
		//ham tao de xac thuc dang nhap
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$data = $this->fetchAll();
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/DiscountView.php",array("data"=>$data));
		}
		//edit Discount
		public function edit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham trong model de lay 1 ban ghi
			$record = $this->fetch($id);
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=Discount&action=doEdit&id=$id";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/AddEditDiscountView.php",array("record"=>$record,"formAction"=>$formAction));
		}
		//do edit Discount
		public function doEdit(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham insert trong model de insert ban ghi
			$this->update($id);
			//quay tro lai duong dan
            echo "<script>alert(\"Cập nhật thông tin thành công\");document.location = 'index.php?area=backend&controller=Discount';</script>";
			//header("location:index.php?area=backend&controller=Discount");
		}
		//add Discount
		public function add(){
			//tao bien $formAction de dieu phoi action cua form
			$formAction = "index.php?area=backend&controller=Discount&action=doAdd";
			//goi view, truyen du lieu ra view
			$this->renderHTML("Views/Backend/AddEditDiscountView.php",array("formAction"=>$formAction));
		}
		//do add Discount
		public function doAdd(){
			//goi ham insert trong model de insert ban ghi
			$this->insert();
			//quay tro lai duong dan
			echo "<script>alert(\"Thêm thông tin giảm giá thành công\");document.location = 'index.php?area=backend&controller=Discount';</script>";
			//header("location:index.php?area=backend&controller=Discount");
		}
		//delete Discount
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham delete trong model de delete ban ghi
			$this->deleteDiscount($id);
			//quay tro lai duong dan
			header("location:index.php?area=backend&controller=Discount");
		}
	}
 ?>
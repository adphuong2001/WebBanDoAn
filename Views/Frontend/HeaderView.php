<header id="header">
    
    <div class="mid-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.php"> <img style="height: 115px;" src="Assets/frontend/100/047/633/themes/517833/assets/lotteria_logo.png?1481775169361" alt="Flynn" title="Flynn" class="img-responsive"> </a> </div>
                <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                    <script type="text/javascript">
                        function search(){
                            key = document.getElementById("key").value;
                            location.href="index.php?area=Frontend&controller=ProductDetail&action=findSP&key="+key;
                            return false;
                        }
                    </script>
                    <form method="post" action="">
                        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
                        <button  type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">

                    <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                        <a href="index.php?controller=Cart">
                            <?php
                              //lay so luon san pham
                                $cartNumber = 0;
                                if(isset($_SESSION["cart"]) == true) {
                                    foreach ($_SESSION["cart"] as $product) {
                                        $cartNumber = $cartNumber + $product["number"];
                                    }
                            }

                            ?>
                            <span class="mini-cart-count"> <?php echo $cartNumber; ?> </span> sản phẩm <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="content-mini-cart">
                            <div class="has-items">
                                <ul class="list-unstyled">
                                    <?php if(isset($_SESSION["cart"])): ?>
                                        <?php foreach ($_SESSION["cart"] as $product): ?>
                                            <li class="clearfix" id="item-1853038">
                                                <div class="image"> <a href="index.php?controller=Product_Detail&id=<?php echo $product['id']; ?>">
                                                        <img alt="<?php echo $product['name']; ?>" src="Assets/upload/product/<?php echo $product['img']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive"> </a> </div>
                                                <div class="info">
                                                    <h3><a href="index.php?controller=Product_Detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h3>
                                                    <p><?php echo $product['number']; ?> x <?php echo number_format($product['price']); ?> ₫</p>
                                                </div>
                                                <div> <a href="index.php?controller=Cart&action=delete&id=<?php echo $product['id']; ?>"> <i class="fa fa-times"></i></a> </div>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php
                                     endif;
                                    ?>
                                </ul>
                                <a href="index.php?controller=Cart" class="button">Thanh toán</a> </div>

                        </div>
                    </div>

                </div>
                <?php 
                    if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"){
                        unset($_SESSION["fullname"]);
                        unset($_SESSION["email"]);
                        unset($_SESSION["role"]);
                        unset($_SESSION["acid"]);
                    }
                ?>
                <?php if(isset($_SESSION["fullname"]) == false):?>
                    <div style="margin-left: 1070px;font-size: 16px;margin-top: 0px;">
                    <a href="index.php?area=Backend&controller=Login"><span class="icon"><i class="fa fa-user"> Đăng Nhập</i></span></a>  
                <?php else:?>
                    <div style="margin-left: 990px;font-size: 16px;margin-top: 0px;">
                        <div class="dropdown_user">
                            <button  onclick="hamDropdown()"  class="nut_dropdown"><i class="fa fa-user"> <?php echo $_SESSION["fullname"]?></i></button>
                            <div class="noidung_dropdown">
                                <a href="index.php?area=backend&controller=User&action=UpdateAccount&id=<?php echo $_SESSION['acid'];?>">Cập nhật thông tin</a>
                                <a href="index.php?area=frontend&controller=Cart&action=AcCart&id=<?php echo $_SESSION['acid'];?>">Đơn mua</a>
                                <a href="index.php?area=backend&controller=User&action=logout">Đăng xuất</a>
                            </div>
                        </div>
                <?php endif;?>
                </div>
            </div>
        </div>
        
        <div class="bottom-header">
            <div class="container">
                <div class="clearfix">
                    <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                        <li ><a href="index.php">Trang chủ</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?controller=ProductCategory&id=1">Gà</a></li>
                                <li><a href="index.php?controller=ProductCategory&id=2">Combo Gà</a></li>
                                <li><a href="index.php?controller=ProductCategory&id=3">Burger</a></li>
                                <li><a href="index.php?controller=ProductCategory&id=4">Món tráng miệng</a></li>
                                <li><a href="index.php?controller=ProductCategory&id=5">Kem</a></li>
                                <li><a href="index.php?controller=ProductCategory&id=6">Cà phê</a></li>
                                <li><a href="index.php?controller=ProductCategory&id=7">Đồ uống</a></li>
                            </ul>
                        </li>
                        <li ><a href="index.php?controller=Cart">Giỏ Hàng</a></li>
                        <li ><a href="index.php?controller=Contacts">Liên hệ</a></li>
                    </ul>
                    <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
                    <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                        <li class="active"><a href="index.php">Trang chủ</a></li>
                        <li ><a href="#">Giới thiệu</a></li>
                        <li ><a href="index.php?controller=Cart">Giỏ hàng</a></li>
                        <li ><a href="index.php?controller=lienhe">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
</header>
<style>
    /* Nút Dropdown*/
 .nut_dropdown {
   background-color: #0080ff;
   color: white;
   padding: 16px;
   font-size: 16px;
   border: none;
 }
/* Thiết lập vị trí cho thẻ div với class dropdown*/
 .dropdown_user {
   position: relative;
   display: inline-block;
 }
/* Nội dung Dropdown */
 .noidung_dropdown {
   /*Ẩn nội dụng các đường dẫn*/
   display: none;
   position: absolute;
   background-color: #f1f1f1;
   min-width: 160px;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
 }
/* Thiết kế style cho các đường dẫn tronng Dropdown */
 .noidung_dropdown a {
   color: black;
   padding: 12px 16px;
   text-decoration: none;
   display: block;
 }
 .hienThi{
   display:block;
 }
</style>
<script>
function hamDropdown() {
     document.querySelector(".noidung_dropdown").classList.toggle("hienThi");
}
window.onclick = function(e) {
if (!e.target.matches('.nut_dropdown')) {
var noiDungDropdown = document.querySelector(".noidung_dropdown");
    if (noiDungDropdown.classList.contains('hienThi')) {
    noiDungDropdown.classList.remove('hienThi');
    }
}
}
</script>
<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?> 
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit material</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên kho</div>
                <div class="col-md-10">
                    <select name="MaKho">
                        <?php
                            $conn = Connection::getInstance();
                            $stmt = $conn->prepare("select MaKho,TenKho from tbl_storage");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value=".$row['MaKho'].">".$row['TenKho']."</option>";
                            }
                        ?>
                    </select><br>
                </div>
                </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên NCC</div>
                <div class="col-md-10">
                    <select name="MaNCC">
                        <?php
                            $conn = Connection::getInstance();
                            $stmt = $conn->prepare("select MaNCC,TenNCC from tbl_supplier");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value=".$row['MaNCC'].">".$row['TenNCC']."</option>";
                            }
                        ?>
                    </select><br>
                </div>
                </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên nguyên liệu</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->TenNL)?$record->TenNL:''; ?>" name="TenNL" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giá tiền</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->GiaTien)?$record->GiaTien:''; ?>" name="GiaTien" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số lượng</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->SoLuong)?$record->SoLuong:''; ?>" name="SoLuong" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ngày nhập</div>
                <div class="col-md-10">
                    <input type="date" value="<?php echo isset($record->NgayNhap)?$record->NgayNhap:''; ?>" name="NgayNhap" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Hạn sử dụng</div>
                <div class="col-md-10">
                    <input type="date" value="<?php echo isset($record->HanSuDung)?$record->HanSuDung:''; ?>" name="HanSuDung" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ảnh</div>
                <div class="col-md-10">
                    <?php if(isset($record->AnhNL)):?>
                        <img src="Assets/upload/material/<?php echo $record->AnhNL ?>" style="width: 100px;">
                    <?php endif;?>
                    <input type="file" value="<?php echo isset($record->AnhNL)?$record->AnhNL:''; ?>" name="AnhNL" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>
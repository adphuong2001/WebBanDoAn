<!-- load file layout vao day -->
<?php 
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit product</div>
        <div class="panel-body">
        <!-- them thuoc tinh enctype="multipart/form-data" de upload file -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->TenNL)?$record->TenNL:''; ?>" name="TenNL" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Price</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->GiaTien)?$record->GiaTien:''; ?>" name="GiaTien" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Quantity</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->SoLuong)?$record->SoLuong:''; ?>" name="SoLuong" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Unit</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->Unit)?$record->Unit:''; ?>" name="Unit" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Storage</div>
                <div class="col-md-10">
                    <select name="MaKho" class="form-control" style="width: 300px;">
                        <?php 
                            $conn = Connection::getInstance();
                            $query = $conn->query("select * from tbl_storage order by MaKho asc");
                            //lay tat ca ket qua tra ve
                            $storage = $query->fetchAll();
                            foreach($storage as $rows):
                         ?>
                        <option <?php if(isset($record->MaKho)&&$record->MaKho==$rows->MaKho): ?> selected <?php endif; ?> value="<?php echo $rows->MaKho; ?>">
                            <?php echo $rows->TenKho; ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Suppliers</div>
                <div class="col-md-10">
                    <select name="MaNCC" class="form-control" style="width: 300px;">
                        <?php 
                            $conn = Connection::getInstance();
                            $query = $conn->query("select * from tbl_supplier order by MaNCC asc");
                            //lay tat ca ket qua tra ve
                            $supplier = $query->fetchAll();
                            foreach($supplier as $rows):
                        ?>
                        <option <?php if(isset($record->MaNCC)&&$record->MaNCC==$rows->MaNCC): ?>selected <?php endif; ?> value="<?php echo $rows->MaNCC; ?>">
                             <?php echo $rows->TenNCC; ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Import date</div>
                <div class="col-md-10">
                    <?php if(isset($record->NgayNhap)):?>
                        <input id="importdate" name="importdate" type="date" value="<?php echo $record->NgayNhap; ?>"/>
                    <?php else:?>
                        <input id="importdate" name="importdate" type="date" value=""  required />
                    <?php endif;?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Expiry date</div>
                <div class="col-md-10">
                    <?php if(isset($record->HanSuDung)):?>
                        <input id="expirydate" name="expirydate" type="date" value="<?php echo $record->HanSuDung; ?>"/>
                    <?php else:?>
                        <input id="expirydate" name="expirydate" type="date" value=""  required />
                    <?php endif;?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Upload image</div>
                <div class="col-md-10">
                    <input type="file" name="AnhNL">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->AnhNL)&&$record->AnhNL!=""&&file_exists("Assets/upload/material/".$record->AnhNL)): ?>
                    <img src="Assets/upload/material/<?php echo $record->AnhNL; ?>" style="width: 100px;">
                    <?php endif; ?>
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
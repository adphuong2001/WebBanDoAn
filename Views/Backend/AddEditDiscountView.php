<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?> 
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit MGG</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giá giảm</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->GiaGiam)?$record->GiaGiam:''; ?>" name="GiaGiam" class="form-control" required>
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
                <div class="col-md-2">Chi tiết</div>
                <div class="col-md-10">
                    <textarea name="ChiTiet" id="ChiTiet">
                        <?php echo isset($record->ChiTiet)?$record->ChiTiet:''; ?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("ChiTiet");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ngày bắt đầu</div>
                <div class="col-md-10">
                    <input type="datetime-local" value="<?php echo isset($record->NgayBatDau)?$record->NgayBatDau:''; ?>" name="NgayBatDau" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ngày kết thúc</div>
                <div class="col-md-10">
                    <input type="datetime-local" value="<?php echo isset($record->NgayKetThuc)?$record->NgayKetThuc:''; ?>" name="NgayKetThuc" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Trạng thái</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->TrangThai)?$record->TrangThai:''; ?>" name="TrangThai" class="form-control" required>
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
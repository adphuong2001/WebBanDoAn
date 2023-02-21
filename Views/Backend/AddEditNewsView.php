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
                <div class="col-md-2">Tên tin tức</div>
                <div class="col-md-10">
                    <textarea name="TenTinTuc" id="TenTinTuc">
                        <?php echo isset($record->TenTinTuc)?$record->TenTinTuc:''; ?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("TenTinTuc");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Nội dung</div>
                <div class="col-md-10">
                    <textarea name="NoiDung" id="NoiDung">
                        <?php echo isset($record->NoiDung)?$record->NoiDung:''; ?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("NoiDung");
                    </script>
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
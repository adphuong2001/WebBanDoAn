<?php
//ke thua Layout1.php de load vao day
$this->fileLayout = "Views/Backend/Layout1.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit category</div>
        <div class="panel-body">
            <form method="post" action="<?php echo $formAction; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Name</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <!-- end rows --> 
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Parent</div>
                    <div class="col-md-10">
                        
                        <select name="parent_id" class="form-control" style="width: 300px;">
                            <?php 
                            $conn = Connection::getInstance();
                            $query = $conn->query("select name from tbl_category");
                            //lay tat ca ket qua tra ve
                            $category = $query->fetchAll();
                            foreach($category as $rows):
                        ?>
                            <option ><?php echo $rows->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <a href="index.php?area=backend&controller=category&action=add" class="btn btn-success">Thêm mới</a>
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>
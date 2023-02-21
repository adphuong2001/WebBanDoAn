<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>                  
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Ingredient&action=add" class="btn btn-primary">Add</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List ingredient</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Import date</th>
                    <th>Expiry</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php $cnt=1;
                foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $cnt; $cnt++;?></td>
                    <td><?php echo $rows->TenNL; ?></td>
                    <td>
                        <?php if($rows->AnhNL != "" && file_exists("Assets/upload/material/".$rows->AnhNL)): ?>
                            <img src="Assets/upload/material/<?php echo $rows->AnhNL; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->GiaTien; ?></td>
                    <td><?php echo $rows->SoLuong; ?></td>
                    <td><?php echo $rows->Unit; ?></td>
                    <td><?php echo $rows->NgayNhap; ?></td>
                    <td><?php echo $rows->HanSuDung; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=Ingredient&action=edit&id=<?php echo $rows->MaNL; ?>">Edit</a>&nbsp;
                        <a href="index.php?area=backend&controller=Ingredient&action=delete&id=<?php echo $rows->MaNL; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
        </div>
    </div>
</div>
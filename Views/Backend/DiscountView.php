<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?>                  
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=Discount&action=add" class="btn btn-primary">Add MGG</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List MGG</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>STT</th>
                    <th>Giá giảm</th>
                    <th>Số lượng</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng thái</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php $cnt=1;foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $cnt;$cnt++; ?></td>
                    <td><?php echo $rows->GiaGiam; ?></td>
                    <td><?php echo $rows->SoLuong; ?></td>
                    <td><?php echo $rows->NgayBatDau; ?></td>
                    <td><?php echo $rows->NgayKetThuc; ?></td>
                    <td><?php echo $rows->TrangThai; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=Discount&action=edit&id=<?php echo $rows->MaGG; ?>">Edit</a>&nbsp;
                        <a href="index.php?area=backend&controller=Discount&action=delete&id=<?php echo $rows->MaGG; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
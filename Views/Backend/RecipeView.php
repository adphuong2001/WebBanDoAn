<!-- load file layout vao day -->
<?php 
    $this->fileLayout = "Views/Backend/Layout1.php";
    $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
    //lay bien ket noi csdl
    $conn = Connection::getInstance();
    //chuan bi truy van
    $query = $conn->prepare("select img,name from tbl_product where id=:id");
    //thuc thi truy van
    $query->execute(array("id"=>$id));
    //tra ve tong so luong ban ghi
    $row = $query->fetch(PDO::FETCH_ASSOC);
 ?>
 <div class="row" style="margin-top:5px;">
    <div class="col-md-2">
        <?php if(isset($row["img"])&&$row["img"]!=""&&file_exists("Assets/upload/product/".$row["img"])): ?>
            <img src="Assets/upload/product/<?php echo $row["img"]; ?>" style="width: 100px; margin-left:10px">
        <?php endif; ?>
    </div>
    <div class="col-md-10">
        <h4 style="margin-top:40px;"><?php echo $row["name"];?></h4>
    </div>
</div>
<div class="col-md-12">  
    <div style="margin-bottom:5px;">
        <a href="#" class="btn btn-primary">Add recipe</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Recipe detail</div>
        <div class="panel-body">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th style="width:100px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $stmt = $conn->prepare("select tbl_material.TenNL as 'TenNL',tbl_recipe.SoLuong as 'SoLuong',tbl_material.Unit as DonVi
                                                from tbl_material inner join tbl_recipe 
                                                on tbl_material.MaNL = tbl_recipe.Mat_ID
                                                where tbl_recipe.Pro_ID=:id");
                        //thuc thi truy van
                        $stmt->execute(array("id"=>$id));
                    ?>
                    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                        <tr>
                            <td><?php echo isset($row["TenNL"])?$row["TenNL"]:''; ?></td>
                            <td><?php echo isset($row["SoLuong"])?$row["SoLuong"]:''; ?></td>
                            <td><?php echo isset($row["DonVi"])?$row["DonVi"]:''; ?></td>
                            <td style="text-align:center;">
                                <a href="#?>">Edit</a>&nbsp;
                                <a href="#" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
                            </td>
                        </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
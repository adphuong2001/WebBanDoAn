<?php 
	//dat duong dan cho bien $fileLayout de load template vao day
	$this->fileLayout = "Views/Backend/Layout1.php";
 ?>
 <div class="col-md-12">
    <div class="panel panel-primary">
        <?php
            $fdate = $_POST["fromdate"];
            $tdate = $_POST["todate"];
        ?>
        <div class="panel-heading"><h4>Báo cáo doanh thu từ ngày <?php echo date_format(date_create($fdate),"d/m/Y");?> đến ngày <?php echo date_format(date_create($tdate),"d/m/Y");?></h4></div>
        <div class="table-responsive">
            <table class="table table-cart">
                <thead>
                <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Tổng số lượng bán</th>
                    <th class="price">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $conn = Connection::getInstance();
                    $stmt = $conn->prepare("select tbl_product.id as 'pdid',tbl_product.img as 'pdi',tbl_product.name as 'pdn',tbl_product.price as 'pdgbl',tbl_order_detail.price as 'odp',sum(tbl_order_detail.number) as 'odn',tbl_order.create_at as 'ngaymua' 
                                            from tbl_order inner join tbl_order_detail on tbl_order.order_id = tbl_order_detail.order_id 
                                                            inner join tbl_product on tbl_order_detail.product_id = tbl_product.id
                                            where date(tbl_order.create_at) between ? and ?
                                            group by tbl_product.name");  
                    $stmt->bindValue(1, $fdate);  
                    $stmt->bindValue(2, $tdate);  
                    $stmt->execute();
                ?>
                <?php $ttn=0;while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                    <tr>
                        <td><img src="Assets/upload/product/<?php echo $row['pdi']; ?>" class="img-responsive" /></td>
                        <td><a href="index.php?controller=ProductDetail&id=<?php echo $row['pdid']; ?>"><?php echo $row['pdn']; ?></a></td>
                        <td> <?php echo number_format($row['pdgbl']); ?>₫ </td>
                        <td> <?php echo number_format($row['odn']); ?> </td>
                        <td><p><b><?php echo number_format($row['pdgbl']*$row['odn']); $ttn+=$row['pdgbl']*$row['odn'];?>₫</b></p></td>
                    </tr>
                <?php }?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" style="text-align:center ;"><h4><b>Tổng doanh thu:</b></h4></th>
                        <td><p><b><?php echo number_format($ttn);?>₫</b></p></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php
  $this->fileLayout = "Views/Frontend/layout_trangtrong.php";
?>
<!-- main -->
<div class="template-cart">
    <form action="index.php?controller=Cart&action=update" method="post">
        <div class="table-responsive">
            <table class="table table-cart">
                <thead>
                <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng mua</th>
                    <th class="date">Ngày mua</th>
                    <th class="price">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $conn = Connection::getInstance();
                    $stmt = $conn->prepare("select tbl_product.id as 'pdid',tbl_product.img as 'pdi',tbl_product.name as 'pdn',tbl_product.price as 'pdgbl',tbl_order_detail.price as 'odp',tbl_order_detail.number as 'odn',tbl_order.create_at as 'ngaymua' 
                                            from tbl_order inner join tbl_order_detail on tbl_order.order_id = tbl_order_detail.order_id 
                                                            inner join tbl_product on tbl_order_detail.product_id = tbl_product.id
                                            where tbl_order.customer_id = ?");  
                    $stmt->bindValue(1, $_SESSION["acid"]);  
                    $stmt->execute();
                ?>
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                    <tr>
                        <td><img src="Assets/upload/product/<?php echo $row['pdi']; ?>" class="img-responsive" /></td>
                        <td><a href="index.php?controller=ProductDetail&id=<?php echo $row['pdid']; ?>"><?php echo $row['pdn']; ?></a></td>
                        <td> <?php echo number_format($row['pdgbl']); ?>₫ </td>
                        <td> <?php echo number_format($row['odn']); ?> </td>
                        <td> <?php echo date_format(date_create($row['ngaymua']),"Y/m/d"); ?> </td>
                        <td><p><b><?php echo number_format($row['odn']*$row['pdgbl']); ?>₫</b></p></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </form>
</div>
<!-- end main -->

<?php
 trait CategoryModel{
     public function getAll(){
         $conn = Connection::getInstance();
         $query = $conn->query("select * from tbl_category order by id asc");
         return $query->fetchAll();
     }
 }
?>
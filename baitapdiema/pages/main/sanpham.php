 <head>
   <style>
      h2{
         text-align: left;
      }
      h1{
         margin-left: 20px;
      }
      .warpper_deital{  
         margin-left: 20px;
      }
   
   </style>
 </head>
 <body>
 <h1>Chi tiết sản phẩm </h2>
 <?php
    $sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet=mysqli_query($connect,$sql_chitiet);
    while ($row_chitiet=mysqli_fetch_array($query_chitiet)){
 ?>
 <div class="warpper_deital"> 
 <div class="hinhanh_sanpham">
        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
 </div>
    <form action="pages/main/giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
        <div class="chitiet_sanpham" style="padding: 20px;">
            <h2 style="margin: 0;"><?php echo $row_chitiet['tensanpham'] ?></h2>
            <h2>Giá: <?php echo number_format($row_chitiet['giasanpham'],0,',','.').'đ' ?></h2>
            <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
            <p><input  class="themgiohang" type="submit" name="themgiohang" value="Thêm Giỏ Hàng"></p>
        </div>
    </form>
 </div>
 <?php
    }
 ?>
 </body>
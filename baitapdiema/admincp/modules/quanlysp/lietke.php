
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>

<body>
<?php
    
    
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $result_lietke_sp= mysqli_query($connect,$sql_lietke_sp);
?>
<h1 style="text-align:center">Liệt kê danh mục sản phẩm</h1>
 <table class="table table-striped" style="border-bottom: 2px solid black;"> 
     <tr>
         <td>ID</td>
         <td>Tên sản phảm</td>
         <td>Hình ảnh </td>
         <td>Giá sản phẩm</td>
         <td>Số lượng</td>
         <td>Danh mục</td>
         <td>Mã sản phẩm</td>
         <td>Tóm tăt</td>
         <td>Nội dung</td>
         <td>Trạng thái</td>
         <td>Quản lý</td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_sp)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td style="width:80px;height:150px; text-align: center; border: 2px solid black;">
                            <?php echo $row['tensanpham'] ?>   
         </td>
         
         <td style="width:150px;height:150px; border: 2px solid black;" >
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>

         <td style="width:150px;text-align: center; ">
                            <?php echo number_format($row['giasanpham'],0,',','.').'VNĐ'  ?>   
         </td>
         <td style="border: 2px solid black;"><?php echo $row['soluong'] ?>      </td>
         <td style="border: 2px solid black;"><?php echo $row['tendanhmuc'] ?>      </td>
         <td style="border: 2px solid black;"><?php echo $row['masanpham'] ?>    </td>
         <td style="border: 2px solid black;"><?php echo $row['noidung'] ?>       </td>
         <td style="border: 2px solid black;"><?php echo $row['tomtat'] ?>       </td>
         <td style="border: 2px solid black;"><?php if($row['trangthai']==1){
                echo "Mới";
         }else{
                echo "Cũ";
         }?>
         </td>
         <td style="border: 1px solid black;">
            <a class="btn btn-danger" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a>|
             <a class="btn btn-warning" href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>
</body>
</html>
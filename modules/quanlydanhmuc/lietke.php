<?php
$sql_lietke_danhmucsp="SELECT * FROM tbl_danhmuc ORDER BY MaDM ASC";
$query_lietke_danhmucsp=mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liệt kê sản danh mục sản phẩm</p>
<table style="width:70%" style="border-collapse: collapse;">  
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Quản lý</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($query_lietke_danhmucsp)){
        ?>
        <tr>
           <td><?php echo $row['MaDM'] ?></td>
           <td><?php echo $row['TenDM'] ?></td>
           <td>
            <center><a href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['MaDM']?>">Xóa</a> | 
            <a href="?action=quanlydanhmuc&query=sua&iddanhmuc=<?php echo $row['MaDM']?>">Sửa</a></center>
           </td>
        </tr>
        <?php
        }
        ?>
</table>
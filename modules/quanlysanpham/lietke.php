<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_danhmuc.MaDM=tbl_sanpham.madm ORDER BY MaSP ASC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<p>Liệt kê sản danh mục sản phẩm</p>
<table style="width:100%" style="border-collapse: collapse;">
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>   
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Mô tả</th>
        <th>Trạng thái</th>
        <th>Mã NSX</th>
        <th>Danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($query_lietke_sp)) 
    {
    ?>
        <tr>
            <td><?php echo $row['masp'] ?></td>
            <td><?php echo $row['tensp'] ?></td>        
            <td><?php echo $row['gia'] ?></td>
            <td><?php echo $row['soluong'] ?></td>
            <td>
                <center><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="130px" height="70px"></center>
            </td>
            <td><?php echo $row['mota'] ?></td>
            <td><?php if ($row['tinhtrang'] == 1) {
                    echo "Còn hàng";
                } else {
                    echo "Hết hàng";
                }
                ?>
            </td>
            <td><?php echo $row['mansx'] ?></td>
            <td><?php echo $row['TenDM'] ?></td>
            <td>
                <center><a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['masp'] ?>">Xóa</a> |
                        <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['masp'] ?>">Sửa</a>
                </center>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
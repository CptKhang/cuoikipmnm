<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE masp='$_GET[idsanpham]'";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<?php
while ($row = mysqli_fetch_array($query_sua_sp)) {
?>
    <table style="width:70%" style="border-collapse: collapse;">
        <form method="post" action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype="multipart/form-data">

            <tr>
                <th>Mã sản phẩm</th>
                <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
            </tr>
            <tr>
                <th>Tên sản phẩm</th>
                <td><input type="text" value="<?php echo $row['tensp'] ?>" name="tensp"></td>
            </tr>
            <tr>
                <th>Giá</th>
                <td><input type="text" value="<?php echo $row['gia'] ?>" name="gia"></td>
            </tr>
            <tr>
                <th>Số lượng</th>
                <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
            </tr>
            <tr>
                <th>Hình ảnh</th>
                <td>
                    <input type="file" name="hinhanh">
                    <center><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="130px" height="70px"></center>
                </td>
            </tr>

            <tr>
                <th>Mô tả</th>
                <td><textarea rows="10" value="<?php echo $row['mota'] ?>" name="mota" style="resize: none"></textarea></td>
            </tr>
            <tr>
                <th>Tình trạng</th>
                <td>
                    <select name="tinhtrang">
                        <?php
                        if ($row['tinhtrang'] == 1) {
                        ?>
                            <option value="1" selected>Còn hàng</option>
                            <option value="0">Hết hàng</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Còn hàng</option>
                            <option value="0" selected>Hết hàng</option>
                        <?php
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <th>Danh mục sản phẩm</th>
                <td>
                    <select name="dm">
                        <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY MaDM ASC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) 
                        {
                            if ($row['madm'] == $row_danhmuc['MaDM']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['MaDM'] ?>"><?php echo $row_danhmuc['TenDM'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['MaDM'] ?>"><?php echo $row_danhmuc['TenDM'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Mã NSX</th>
                <td><input type="text" value="<?php echo $row['mansx'] ?>" name="mansx"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suasp" value="Sửa"></td>
            </tr>

        </form>
    </table>


<?php
}
?>
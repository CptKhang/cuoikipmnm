<p>Thêm sản phẩm</p>
<table style="width:70%" style="border-collapse: collapse;">
    <form method="post" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
        <tr>
            <th>Mã sản phẩm</th>
            <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <th>Tên sản phẩm</th>
            <td><input type="text" name="tensp"></td>
        </tr>
        <tr>
            <th>Giá</th>
            <td><input type="text" name="gia"></td>
        </tr>
        <tr>
            <th>Số lượng</th>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <th>Hình ảnh</th>
            <td><input type="file" name="hinhanh"></td>
        </tr>

        <tr>
            <th>Mô tả</th>
            <td><textarea rows="10" name="mota" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <th>Tình trạng</th>
            <td>
                <select name="tinhtrang">
                    <option value="1">Còn hàng</option>
                    <option value="0">Hết hàng</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Mã NSX</th>
            <td><input type="text" name="mansx"></td>
        </tr>
        <tr>
            <th>Danh mục sản phẩm</th>
            <td>
            <select name="dm">
                        <?php
                        $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY MaDM ASC";
                        $query=mysqli_query($mysqli,$sql_danhmuc);
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>
                         <option value="<?php echo $row['MaDM']?>"><?php echo $row['TenDM']?></option>  
                        <?php
                        }
                        ?>
                    </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsp" value="Thêm"></td>
        </tr>
    </form>
</table>
<?php
    $sql_sua_danhmucsp="SELECT * FROM tbl_danhmuc WHERE MaDM='$_GET[iddanhmuc]'";
    $query_sua_danhmucsp=mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p>Sửa sản phẩm</p>
<table style="width:70%" style="border-collapse: collapse;">
    <form method="post" action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
        <?php
        while($dong=mysqli_fetch_array($query_sua_danhmucsp))
        {
        ?>
        <tr>
            <th>Mã danh mục</th>
            <td><input type="text" value="<?php echo $dong['MaDM']?>"name="Ma"></td>
        </tr>
        <tr>
            <th>Tên danh mục</th>
            <td><input type="text" value="<?php echo $dong['TenDM']?>" name="Ten"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadm" value="Sửa"></td>
        </tr>
        <?php
        }
        ?>
    </form>
</table>
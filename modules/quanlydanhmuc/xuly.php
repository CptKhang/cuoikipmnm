<?php
include('../../config/config.php');
$maloaisp=$_POST['Ma'];
$tenloaisp=$_POST['Ten'];
if(isset($_POST['themdm']))
{
    $sql_them="INSERT INTO tbl_danhmuc(MaDM,TenDM) VALUE ('".$maloaisp."','".$tenloaisp."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlydanhmuc&query=them');
}
else if(isset($_POST['suadm']))
{
    //Sua
    $sql_update="UPDATE tbl_danhmuc SET TenDM='".$tenloaisp."' WHERE MaDM='$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlydanhmuc&query=them');
}
else 
{
    $id=$_GET['iddanhmuc'];
    $sql_xoa="DELETE FROM tbl_danhmuc WHERE MaDM='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlydanhmuc&query=them');
}
?>
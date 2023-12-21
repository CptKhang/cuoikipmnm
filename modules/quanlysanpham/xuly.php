<?php
include('../../config/config.php');
$ma = $_POST['masp'];
$ten = $_POST['tensp'];
$gia = $_POST['gia'];
$sl = $_POST['soluong'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$mota = $_POST['mota'];
$tinhtrang = $_POST['tinhtrang'];
$mansx = $_POST['mansx'];
$dm = $_POST['dm'];

if (isset($_POST['themsp'])) {
    $sql_them = "INSERT INTO tbl_sanpham(masp,tensp,gia,soluong,hinhanh,mota,tinhtrang,mansx,madm) VALUE 
    ('" . $ma . "','" . $ten . "','" . $gia . "','" . $sl . "','" . $hinhanh . "','" . $mota . "','" . $tinhtrang . "','" . $mansx . "','" . $dm . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else if (isset($_POST['suasp'])) {
    //Sua
    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql_update = "UPDATE tbl_sanpham SET tensp='" . $ten . "', gia='" . $gia . "', soluong='" . $sl . "', hinhanh='" . $hinhanh . "',
    mota='" . $mota . "',tinhtrang='" . $tinhtrang . "',mansx='" . $mansx . "',madm='" . $dm . "'
    WHERE masp='$_GET[idsanpham]'";
    //Xoa anh cu
    $sql = "SELECT * FROM tbl_sanpham WHERE masp='$_GET[idsanpham]'";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    } else {
        $sql_update = "UPDATE tbl_sanpham SET tensp='" . $ten . "', gia='" . $gia . "', soluong='" . $sl . "',
    mota='" . $mota . "',tinhtrang='" . $tinhtrang . "',mansx='" . $mansx . "',madm='" . $dm . "'
    WHERE masp='$_GET[idsanpham]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE masp='$id'";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE  FROM tbl_sanpham WHERE masp='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}

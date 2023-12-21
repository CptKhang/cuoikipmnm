<div class="leftcolumn">
        <div class="admin_list">
            <ul>
                <li><a href="index.php?action=quanlydanhmuc&query=them">Quản lí danh mục sản phẩm</a></li>
                <li><a href="index.php?action=quanlysanpham&query=them">Quản lí sản phẩm</a></li>
                <li><a href="index.php?action=quanlybaiviet&query=them">Quản lí bài viết</a></li>
                <li><a href="index.php?action=quanlydonhang&query=them">Quản lí đơn hàng</a></li>
            </ul>
        </div>
        <div class="admin_login">
            <ul>
            <li>
            <?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<p><a href="index.php?dangxuat=1">Đăng xuất<?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></p>

            </li>
            </ul>
        </div>
</div>
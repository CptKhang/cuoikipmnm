<div class="rightcolumn">
    <div class="card">
        <?php
        if (isset($_GET['action'])&& $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tam = "";
            $query="";
        }
        if ($tam == 'quanlydanhmuc' && $query=='them') 
        {
            include("modules/quanlydanhmuc/them.php");
            include("modules/quanlydanhmuc/lietke.php");
        }
        else if($tam == 'quanlydanhmuc' && $query=='sua')
        {
            include("modules/quanlydanhmuc/sua.php");
        }
        else if($tam == 'quanlysanpham' && $query=='them')
        {
            include("modules/quanlysanpham/them.php");
            include("modules/quanlysanpham/lietke.php");
        }
        else if($tam == 'quanlysanpham' && $query=='sua')
        {
            include("modules/quanlysanpham/sua.php");
        }
        ?>
    </div>

</div>
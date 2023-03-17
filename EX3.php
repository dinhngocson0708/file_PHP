<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr><td>SẢN PHẨM</td></tr>
            <tr>
                <td>Tên file:</td>
                <td><input type="text" name="ten_file"></td>
            </tr>
            <tr>
                <td>Tên sản phẩm:</td>
                <td><input type="text" name="ten_san_pham"></td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="number" name="dg"></td>
            </tr>
            <tr>
                <td>Số lượng:</td>
                <td><input type="number" name="sl"></td>
            </tr>
            <tr><td><input type="submit" value="Ghi và đọc file"></td></tr>
        </table>
    </form>
    <?php
        if(isset($_POST['ten_file'])){
            $ten_file=$_POST['ten_file'];
            $tensp=$_POST['ten_san_pham'];
            $dg=$_POST['dg'];
            $sl=$_POST['sl'];
            $thanhtien=$dg*$sl;
            $file=fopen($ten_file,"a",1);
            $sp=$tensp."\t".$dg."\t".$sl."\t".$thanhtien."\n";
            fwrite($file,$sp);
            fclose($file);
            echo "Tạo và ghi file thành công!";

            $file=fopen($ten_file,"r");
            echo "<p>Thông tin sản phẩm</p>";
            echo "<table>";
                echo "<tr>";
                    echo "<td>STT</td>";
                    echo "<td>Tên sản phẩm</td>";
                    echo "<td>Đơn giá</td>";
                    echo "<td>Số lượng</td>";
                    echo "<td>Thành tiền</td>";
                echo "</tr>";
                while(!feof($file)){
                    echo "<tr>";
                        $nd=fgets($file,1000);
                        $mang=explode("\t",$nd);
                        echo "<td>"$mang[0]"</td";
                        echo "<td>"$mang[1]"</td";
                        echo "<td>"$mang[2]"</td";
                        echo "<td>"$mang[3]"</td";
                    echo "</tr>";
                }
            echo "</table";  
            echo "Doc file thanh cong!"  
        }else{
            echo "Hãy nhập tên file!";
        }
        
    ?>
</body>
</html>
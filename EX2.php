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
            <tr>
                <td>Tạo ghi đọc file</td>
                <td>
                    <label for="">
                        <input type="text" name="ten_file" id="ten_file" value="<?php echo $_POST["ten_file"];?>">
                    </label>
                </td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td>
                    <textarea name="noi_dung" id="noi_dung" cols="50" rows="4"><?php $_POST['noi_dung'] ?></textarea>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="Submit" value="Ghi và đọc file"></td>
            </tr>
        </table>

    </form>

<?php 
    if(isset($_POST['ten_file'])&& isset($_POST['noi_dung'])){
        $ten_file=$_POST['ten_file'];
        $noi_dung=$_POST['noi_dung'];
        //b1:ghi file:
        $file=fopen("ten_file","w",1);
        fwrite($file,$noi_dung);
        echo "<p> <b>Đã ghi file thành công</b> </p>";
        fclose($file);
        //b2:Xuất file;
        $file=fopen("ten_file","r");
        echo "<table><tr><td>";
        echo "<b>Nội dụng của file</b><br>";
        while(!feof($file)){
            $noi_dung=fgets($file,1000);
            echo nl2br($noi_dung);
        }
        echo "<br><b>Đọc file thành công</b> <br>";
        echo "</td></tr></table>";
        fclose($file);
        }
    else{
            echo "<p>Hãy nhập đử tên file và nội dung</p>";
        }

?>
</body>
</html>
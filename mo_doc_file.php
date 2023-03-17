<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <?php 
                    $flie=fopen('C:\xampp\htdocs\LTWEB_PHP\taptin\doc.txt',"r");
                    if(!$flie){
                        echo "<br> Không thể mở file <br>";
                        exit;
                    }else{
                        while(!feof($flie)){
                            $nd=fgets($flie);
                            echo nl2br($nd);
                        }
                        echo "Mở và đọc file thành công!";
                    }
                    fclose($flie);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
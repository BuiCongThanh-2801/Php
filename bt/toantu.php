<html>
    <head><title>Toán tử số học</title><head>
    <body>
        <?php
        $a = 3;
        $b = 94;

        $c = $a + $b;
        echo "Kết quả phép cộng: $c <br/>";
        $c = $a - $b;
        echo "Kết quả phép trừ: $c <br/>";
        $c = $a * $b;
        echo "Kết quả phép nhân: $c <br/>";
        $c = $a / $b;
        echo "Kết quả phép chia: $c <br/>";
        $c = $a % $b;
        echo "Phần dư phép chia: $c <br/>";
         
        $c = $a++;
        echo "Thêm một vào $c: $a <br/>";
       
        $c = $a--;
        echo "Giảm $a đi 1: $c <br/>";
        ?>
        </body>
    </html>
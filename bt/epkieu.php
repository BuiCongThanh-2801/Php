<?php
$tuoi = '98'; // biến tuổi là một chuỗi có giá trị bằng '98'
$tuoi = (int)$tuoi; // lúc này biến $tuoi là một kiểu int có giá trị 98
?>

<?php
$a = 'a123'; // biến $a có giá trị là chuỗi 'a123'
$a = (int)$a; // chuyển $a sang kiểu INT
echo $a; // kết quả xuất ra màn hình là số 0
?>

<?php
$a = '123a'; // biến $a có giá trị là chuỗi '123a'
$a = (int)$a; // chuyển $a sang kiểu INT
echo $a; // kết quả xuất ra màn hình là số 123
?>
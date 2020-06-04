


<?php   
     /* Phương thức thứ nhất để tạo mảng liên hợp. */
     $dong_xe = array("volvo" => 3, "bmw" => 2, "toyota" => 1);
     echo "<br>";
     echo "Mức độ phổ biến của Volvo là ". $dong_xe['volvo']. "";
     echo "<br>";
     echo "Mức độ phổ biến của BMW là ".  $dong_xe['bmw']. "";
     echo "<br>";
     echo "Mức độ phổ biến của Toyota là ".  $dong_xe['toyota']. "";
     echo "<br>";
    
     /* Phương thức thứ hai để tạo mảng liên hợp. */
     $dong_xe['volvo'] = "low";
     $dong_xe['bmw'] = "medium";
     $dong_xe['toyota'] = "high";
 
     echo "Mức độ phổ biến của Volvo là ". $dong_xe['volvo'] . "";
     echo "<br>";
     echo "Mức độ phổ biến của BMW là ".  $dong_xe['bmw']. "";
     echo "<br>";
     echo "Mức độ phổ biến của Toyota là ".  $dong_xe['toyota']. "";
?>



<?php
include 'koneksi.php';
    $text="tomi.20";
    //echo $text;
    $potong=substr($text,4);
    //echo $potong;
    
      $sql = "SELECT hasil_rapid FROM tbl_user WHERE username='$text'";
      $result = mysqli_query($db1, $sql);

      if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
            echo $row["hasil_rapid"];
         }
      } else {
         echo "0 results";
      }
      mysqli_close($db1);
      
?>
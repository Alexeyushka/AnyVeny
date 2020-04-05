<?php
 $path = 'resellers.txt';
 if (isset($_POST['email'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['email']."\n";
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
    $homepage = file_get_contents("reseller_success.html");
    echo $homepage;
 }
?>
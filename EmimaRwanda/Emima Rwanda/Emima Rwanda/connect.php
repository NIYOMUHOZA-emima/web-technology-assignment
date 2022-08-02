<?php
$server="localhost";
$user="root";
$password="";
$db="bb flowers";
$con=mysqli_connect($server,$user,$password,$db);
if($con) { 
    echo "byakunze";
} else { 
    echo " ntibikunda";
}
?>
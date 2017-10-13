<?php
//文件名为test1.php 
session_start(); 
session_register("url"); 
$url="test2.php"; 
echo "<a href=$url>goto test2.php</a>"; 
?>
<SPAN style="FONT-FAMILY: Arial, Helvetica, sans-serif"> </SPAN>
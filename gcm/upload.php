<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $file_name = $_FILES['myFile']['name'];
 $file_size = $_FILES['myFile']['size'];
 $file_type = $_FILES['myFile']['type'];
 $temp_name = $_FILES['myFile']['tmp_name'];
 
 $separate = explode("_",$file_name);
 $foldername = $separate[1]."_".$separate[2];
 $location = "./users/".$foldername."/";
 
 move_uploaded_file($temp_name, $location.$file_name);
 echo "Success";
 }else{
 echo "Error";
 }
 ?>
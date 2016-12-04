<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


   if(isset($_FILES['upl1'])){
      $errors= array();

     $file_name = $_FILES['upl1']['name'];
      $file_size =$_FILES['upl1']['size'];
      $file_tmp =$_FILES['upl1']['tmp_name'];
      $file_type=$_FILES['upl1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['upl1']['name'])));
      
     
      
    /*  if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }*/
      
      if(empty($errors)==true){
if(($file_ext=='pdf')||($file_ext=='docx'))
{
echo("abstract");
         move_uploaded_file($file_tmp,"abstract/".$file_name);}
else
{
echo("arena");
move_uploaded_file($file_tmp,"arena/".$file_name);
}

}
}





?>


<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("condatabase.php");

$c = count($_FILES['upload']['name']);
$username = $_SESSION['username'] ;

$addr = 'C:\xampp\htdocs\InnoICT-master2.0\P_data/' ;
//echo $_FILES['upload']['name'][0] ;
//$fn =  $_FILES['upload']['name'][0] ;
echo "NOW is ". dirname(__FILE__) ;


//$container = array() ;

$k = 0 ; 

/*$fileName = $_FILES["upload"]["name"]; // The file name
$fileTmpLoc = $_FILES["upload"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["upload"]["type"]; // The type of file it is
$fileSize = $_FILES["upload"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["upload"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}*/


/* $tmpFilePath = $_FILES['file1']['tmp_name'];
 if ($tmpFilePath != ""){
          $oldFile= $_FILES['file1']['name'];
          $old_name=pathinfo($oldFile);
          $add_new_name = time().'.'.$old_name['extension'];
    echo $add_new_name ;
    move_uploaded_file($tmpFilePath, "P_data/".$add_new_name);
      }*/


for( $i = 0 ; $i < $c ; $i ++ ){
    $tmpFilePath = $_FILES['upload']['tmp_name'][$i] ;
    $oldFile= $_FILES['upload']['name'][$i];
    $old_name=pathinfo($oldFile);
    $add_new_name = time().'.'.$old_name['extension'];

      if (move_uploaded_file($tmpFilePath ,'C:\xampp\htdocs\InnoICT-master2.0\P_data') ){
            echo "success" ;
      }
    else 
        echo "wrong" ;
}



?>
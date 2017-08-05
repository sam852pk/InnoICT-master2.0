
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("condatabase.php");

$id = $_POST['InputAccountName'];
$pw = $_POST['InputPassword1'];
$pw2 = $_POST['InputPassword2'];
$email = $_POST['Email'];
$birth = $_POST['Birth'];
$sex = $_POST['Gender'];
$tel = $_POST['Tel'];
$area = $_POST['Region'];
$address = $_POST['Address'];

//echo $id."55" ; 


$activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();

if($id != null && $pw != null && $pw2 != null && $email != null && $pw == $pw2)
{

    $sql = "INSERT INTO `member`( `email`, `password`, `username`,`activationkey`,`status`,`birth`,`sex`,`tele`,`area`,`address`) VALUES ('$email','$pw','$id','$activationKey','0','$birth','$sex','$tel','$area','$address')" ; 
    
    if(mysqli_query($conn , $sql) ){
        session_start();
        $_SESSION['username'] = $id;
        echo "註冊成功!!!" ; 
        echo '<meta http-equiv=REFRESH CONTENT=1;url=../member.php>'; ; 


    }
}



?>
<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
    include("condatabase.php");

    $realname = $_POST['RealName'];
    $age = $_POST['Age'];
    $weight = $_POST['Weight'];
    $height = $_POST['Height'];
    $PersonHist = $_POST['PersonHist'];
    $FamilyHist = $_POST['FamilyHist'];
    $Allergy = $_POST['Allergys'];

$username = $_SESSION['username'] ;



    $sql = "INSERT INTO `member_data`( `username`, `real_name`, `age`,`weight`,`height`,`p_history`,`fam_history`,`allergy`) VALUES ('$username','$realname','$age','$weight','$height','$PersonHist','$FamilyHist','$Allergy')" ; 
    
    if(mysqli_query($conn , $sql) ){
        echo "OK!!!" ; 
        echo '<meta http-equiv=REFRESH CONTENT=1;url=../upload.php>'; 


    }

else
    echo '<meta http-equiv=REFRESH CONTENT=1;url=../upload.php>'; 




?>
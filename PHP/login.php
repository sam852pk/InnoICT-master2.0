

<?php
include("condatabase.php");
$id = $_POST['LoginName'];
$pw = $_POST['LoginPassword'];


$result = mysqli_query($conn , "SELECT * FROM member WHERE username='$id'") ;
$row = @mysqli_fetch_array($result);

$link_prof = "<meta http-equiv=REFRESH CONTENT=1;url=../index.php?id=";
$c = ">";

echo $pw;

if($id != null && $pw != null && $row[3] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
     session_start();
     //$_SESSION["email"]=$_POST["email"];
     $_SESSION["LoginPassword"]=$pw ; 
     $_SESSION["LoginName"]=$id ; 
     //$_SESSION["id"]=$row["id"];
        $_SESSION['username'] = $id;
        echo $_SESSION['username']."OK了";
        
        echo '登入成功!';
    header('Location: ../index.php');
        //echo $link_prof.$id.$c;
}
else
{
        
        //echo '登入失敗!'.$row[3].$row[2];
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
   
}


?>
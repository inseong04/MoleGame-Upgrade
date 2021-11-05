<html>
   <meta charset="utf-8">
<?php
 
$host = '192.168.111.132';
$user = 'root';
$pw = 'sunrin21';
$dbName = 'USER';
$mysqli = new mysqli($host, $user, $pw, $dbName);
 
$nickname=$_POST['nickname'];
$id=$_POST['id'];
$password=($_POST['pwd']);

 
 
 $sql = "insert into USER_ACCOUNT (nickname, id, password)";            
 $sql = $sql. "values(''$nickname', $id','$password'')";        
 if($mysqli->query($sql)){                                                     
  echo 'success inserting <p/>';                                                          
  echo $nickname.'님 가입 되셨습니다.<p/>';                                   
 }else{                                                                            
  echo 'fail to insert sql';                                                          
 }
mysqli_close($mysqli);
 
 
?>
<input type="button" value="로그인하러가기" onclick="location='login.html'">
</html>

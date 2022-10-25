<?php
session_start();
if( isset($_POST['log'])){
$o="sam1";
$f=$_POST['go'];
if($f==$o){
$_SESSION["name"]=true;
header('Location:add.php');
return;}}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="">
        <h>"Log in"</h>
<p> Password
 <input type="password" name="go" required></input>
 </p> 
 <button type=“submit” name="log">login</button></form>
 </body>
 </html>


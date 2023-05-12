<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="" method="POST">

<input type="text" name="login">
<input type="text" name="password">
<input type="submit" value="Login">
</form>
</body>
</html>

<?php

if(!empty($_POST['login']) and !empty($_POST['password'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $query="SELECT * FROM `users` WHERE `login`='$login'";
    $result=mysqli_query($connect,$query);
    $result=mysqli_fetch_assoc($result);
    
    if(!empty($result)){
        if($password===$result['password']){
            echo 'succesfully';
        }else{
            echo 'wrong';
        }
    }else{
        echo 'wrong';
    }
}



?>
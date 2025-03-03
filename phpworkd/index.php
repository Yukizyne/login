<?php

if($_SERVER['REQUEST_METHOD'] == "post"){
    if(empty($_POST['email'])){
         $email_error = "PLease Enter  Valid Email";
    }
    else if(empty($_POST['password'])){
        $password_error = "Please Enter Valid Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <fieldset class="container">
        <legend class="logo">LOGIN</legend>
    <form action="" method="post" autocomplete="off">
        <label for="">Email</label>
        <input type="email" name="email" id="">
        <span><?php if(isset($email_error)) echo $email_error; ?></span>
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <span><?php if(isset($password_error)) echo $password_error; ?></span>
        <input type="submit" value="submit">
    </form>
    </fieldset>
</body>
</html>

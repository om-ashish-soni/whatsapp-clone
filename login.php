
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .form{
            padding:100px;
        }
        input{
            font-size:24px;
        } 
        form{
            padding:100px;
        }
    </style>
</head>
<body>
    <h1>
    <center>
    <form action="login_validate.php" method="POST">
        <label>username</label>
        <input type="text" name="username" required><br>
        <label>password</label>
        <input type="password" name="password" required><br>
        <input type="submit" style="background-color:white;color:white;border:white" colspan="5" value="Go">
    </form> 
    
</body>
</html>
<?php
session_start();
?>
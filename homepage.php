<?php
    require "handler.php";
    
    $user = new User();
    if(isset($_POST['logout']))
    {
        $user->logout_user();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> hello world</h1>
    <h3><?php echo $_SESSION['username'] ?></h3>
    <form method="POST">
    <button type="submit" class="btn btn-primary" id="login" name="logout">logout</button>
    </form>
   
</body>
</html>
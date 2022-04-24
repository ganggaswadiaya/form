<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="">
</head>
<body>
    <div class="bentuk">
        <h4>Login</h4>
        <form action="login.php" method="POST">
            Username <br>
            <input type="text" name="username" placeholder="Enter you username"> <br>
            Password <br>
            <input type="password" name="password" placeholder="Enter you password"> <br>
            <a href="" style="color: black; font-size: 15px; ">Lupa password ?</a> <br> <br>
            <!-- <button style="margin-left: 1rem;">Log in</button>
            <button style="margin-left: 40px;">Sig in</button> -->
            <input type="submit" name="submit" value="Login" style="background-color: #95FD80; height: 40px;border:0; border-radius: 20px; font-family: 'Poppins'; font-weight: 500" />
        </form>
        


    </div>

</body>
</html>
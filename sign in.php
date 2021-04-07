<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Sing in</title>
</head>
<body>
    <div class="container">
        <h2>SIGN IN</h2>
        <form action="sign in traitement.php" method="POST">
            <label for="usernam">usernam</label>
            <input type="text" name="usernam" class="input">
            <label for="password">password</label>
            <input type="password" name="password" class="input"><br>
            <button type="submit"  class="submit">REGESTER</button>
            <p>you already have acount</p>
            <a href="login.php">Log in</a>
        </form>
    </div>
    
</body>
</html>
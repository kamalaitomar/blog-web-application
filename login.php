<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style.css">
    <title>Log in_array</title>
</head>
<body>
    <?php
        if(isset($_GET['true'])){
            echo '<script>alert("username or password is incorrect")</script>';
        }elseif (isset($_GET['singend'])) {
            echo '<script>alert("You have been regestred successfuly")</script>';
        }
    ?>
    <div class="container">
        <h2>LOG IN</h2>
        <form action="login traitement.php" method="POST">
            <label for="usernam">usernam</label>
            <input type="text" name="usernam" class="input">
            <label for="password">password</label>
            <input type="password" name="password" class="input"><br>
            <button type="submit"  class="submit">se connecter</button>
            <p>You don't have acount</p>
            <a href="sign in.php">create acount</a>
        </form>
    </div>
    
</body>
</html>
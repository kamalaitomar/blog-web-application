<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>create post</title>
</head>
<body >
    <?php
    session_start();
    if ($_SESSION['usernam']){
        try{
            echo '
                <div class="nav">
                    <a href="home.php"><button class="submit">home</button></a><br>
                    <a href="create post.php"><button class="submit">Add post</button></a><br>
                    <a href="log out.php"><button class="submit">Log out</button></a><br>
                </div>
                <h2>create Post</h2>
                <form action="post treatment.php" method="POST">
                    <label for="post_title">title</label>
                    <input type="text" name="post_title">
                    <label for="post_content">content</label>
                    <textarea name="post_content" cols="70" rows="100"></textarea><br>
                    <button class="submit" type="submit" >ADD</buttomn>
                </form>';
        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }else{
        header("Location:login.php");
    }
   
?>
</body>
</html>
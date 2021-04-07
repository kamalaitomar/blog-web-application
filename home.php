<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Home</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['usernam']){
            try{
                echo '
                <div class="nav">
                <a href="home.php"><button class="submit">home</button></a><br>
                <a href="create post.php"><button class="submit">Add post</button></a><br>
                <a href="log out.php"><button class="submit">Log out</button></a><br>
                </div>';
                $myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');

                $allposts = $myBase->query('SELECT post_id, user_id, post_title, post_content, DATE_FORMAT(post_date, "%d/%m/%y") as date_post FROM posts order by post_date desc ');

                $allusers = $myBase->prepare('SELECT user_id, usernam  FROM users where user_id=?');

                while($post = $allposts->fetch()){
                    $allusers->execute(array($post['user_id']));
                    $user = $allusers->fetch();
                    echo "<center>
                            <div class='post'>
                                <h5>".$user['usernam']."
                                <h5>".$post['post_title']."<span style='color:red; font-size:14px;'> ".$post['date_post']."</spane>
                                </h5><p>".$post['post_content']."</p>
                                <a href='comment.php?post=".$post['post_id']."'>Add comment</a>
                            </div>
                        </center>";
                }
            }
            catch(PDOException $erreur){
                echo $erreur->getMessage();
            }
        }else{
            header("Location:login.php");
        }
       
    ?>
    
</body>
</html>
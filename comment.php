<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>comments</title>
</head>
<body style="text-align: center;">
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

            $allposts = $myBase->prepare('SELECT user_id, post_id, post_title, post_content, post_date, DATE_FORMAT(post_date, "%d/%m/%y") as date_post FROM posts where post_id=?');
            $allposts->execute(array($_GET['post']));
            $post = $allposts->fetch();

            $allusers = $myBase->prepare('SELECT user_id, usernam  FROM users where user_id=?');
            $allusers->execute(array($post['user_id']));
            $user = $allusers->fetch();

            echo "<center>
                    <div class='post'>
                        <h5>".$user['usernam']."
                        <h5>".$post['post_title']."<span style='color:red; font-size:14px;'> ".$post['date_post']."</spane>
                        </h5><p>".$post['post_content']."</p>
                    </div>
                </center>";

            $allcommentaires = $myBase->prepare('SELECT comment_id, post_id	, user_id, comment_content, comment_date, DATE_FORMAT(comment_date, "%d/%m/%y") as date_commente FROM comments  where post_id=?  order by comment_date desc');
            $allcommentaires->execute(array($post['post_id']));
            echo "<h2 class='comment-header'>COMMENTS</h2>";

        
            while($commentaire = $allcommentaires->fetch()){
                $allusers->execute(array($commentaire['user_id']));
                $user = $allusers->fetch();
                echo "<center><div class='comment'><h6>".$user['usernam']."<span style='color:red; font-size:12px;'> ".$commentaire['date_commente']."</spane></h6><p>".$commentaire['comment_content']."</p></div><center>";   
            }
            echo '
                <h2>Add comment</h2>
                <form action="comment treatment.php" method="POST">
                    <textarea name="idpost" style="display:none">'.$post["post_id"].'</textarea>
                    <textarea name="post_content" cols="70" rows="100"></textarea><br>
                    <button class="submit" type="submit" >ADD</buttomn>
                </form>';

            
        }
        catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }
?>
    
</body>
</html>
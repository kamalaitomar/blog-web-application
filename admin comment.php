<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Comments</title>
</head>
<body >
<?php
        session_start();
        if ($_SESSION['usernam']){
            try{
                echo '
                <div class="nav">
                <a href="admin page.php"><button class="submit">USERS</button></a><br>
                <a href="admin post.php"><button class="submit">POSTS</button></a><br>
                <a href="admin comment.php"><button class="submit">COMMENTS</button></a><br>
                <a href="log out.php"><button class="submit">Log out</button></a><br>
                </div>';?>
                <center><table>
                <tr>
                    <th>Username</th>
                    <th>Comment</th>
                    <th>Comment date</th>
                    <th>Action</th>
                </tr>
                <?php
                    $myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');

                    $allusers = $myBase->prepare('SELECT user_id, usernam,password,date_inscription, DATE_FORMAT(date_inscription, "%d/%m/%y")AS date_inscrire FROM users where user_id=?');
                
                    $allcomments = $myBase->query('SELECT comment_id, user_id, post_id, comment_content, comment_date, DATE_FORMAT(comment_date, "%d/%m/%y")AS commentdate FROM comments  order by comment_id desc ');

                    while($comment = $allcomments->fetch()){
                        $allusers->execute(array($comment['user_id']));
                        $user =$allusers->fetch();    
                        echo "<tr><td>".$user['usernam']."</td><td>".$comment['comment_content']."</td><td>".$comment['commentdate']."</td><td><a href='delete comment.php?comment_id=".$comment['comment_id']."'>Delete</a></td></tr>";

                    }
                ?>
                    </table></center>
                <?php
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
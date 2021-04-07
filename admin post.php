<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Posts</title>
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
                    <th>Post title</th>
                    <th>Post content</th>
                    <th>Post date</th>
                    <th>Action</th>
                </tr>
                <?php
                    $myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');

                    $allposts = $myBase->query('SELECT post_id, user_id, post_title,post_content, post_date, DATE_FORMAT(post_date, "%d/%m/%y") AS postdate FROM posts order by post_date desc');

                    while($post = $allposts->fetch()){
                        echo "<tr><td>".$post['post_title']."</td><td>".$post['post_content']."</td><td>".$post['postdate']."</td><td><a href='delete post.php?post_id=".$post['post_id']."'>Delete</a></td></tr>";
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
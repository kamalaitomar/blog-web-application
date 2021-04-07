<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Users</title>
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
                    <th>Password</th>
                    <th>Inscription date</th>
                    <th>Action</th>
                </tr>
                <?php
                    $myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');

                    $allusers = $myBase->query('SELECT user_id, usernam,password,date_inscription, DATE_FORMAT(date_inscription, "%d/%m/%y")AS date_inscrire FROM users where rule="user"  order by date_inscription desc');

                    while($user = $allusers->fetch()){
                        echo "<tr><td>".$user['usernam']."</td><td>".$user['password']."</td><td>".$user['date_inscrire']."</td><td><a href='delete user.php?user_id=".$user['user_id']."'>Delete</a></td></tr>";
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
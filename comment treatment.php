<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if ($_SESSION['usernam']){
        try{
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');

                $requete = $myBase->prepare('INSERT INTO comments(user_id, post_id, comment_content,comment_date) VALUES(:user, :post, :contenu , NOW())');
                $requete->execute(array('user'=>$_SESSION['user_id'], 'post'=>$_POST['idpost'],'contenu'=>$_POST['post_content']));
                $requete->CloseCursor();
            }
            header("Location: comment.php?post=".$_POST['idpost']);
            exit();
        }
        catch(PDOException $erreur){
            echo 'erreur technique '.$erreur->getMessage();
        }
    }else{
            header("Location:login.php");
        }
            
    ?>
    
</body>
</html>
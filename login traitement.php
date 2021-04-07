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
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');

    $requete = $myBase->prepare('SELECT * FROM users where usernam=? and password=?');
    $requete->execute(array($_POST['usernam'],$_POST['password']));
    $donner = $requete->fetch();
    session_start();

    if($donner){
        if($donner['rule']=='admin'){
            $_SESSION['usernam']=$_POST['usernam'];
            $_SESSION['user_id']=$donner['user_id'];

            header("Location: admin page.php");

        }elseif ($donner['rule']=='user') {
            $_SESSION['usernam']=$_POST['usernam'];
            $_SESSION['user_id']=$donner['user_id'];
            header("Location: home.php");
        }
    }else{
        header("Location:login.php?true");
    } 
    
}

?>
    
</body>
</html>
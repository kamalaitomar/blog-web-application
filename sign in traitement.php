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
    try{
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');

            $requete = $myBase->prepare('INSERT INTO users(usernam,password,rule,date_inscription) VALUES(:login, :password, "user" , NOW())');
            $requete->execute(array('login'=>$_POST['usernam'],'password'=>$_POST['password']));
            echo'the new user is added';
            $requete->CloseCursor();
        }
        header("Location:login.php?singend");
        exit();
    }
    catch(PDOException $erreur){
        echo 'erreur technique '.$erreur->getMessage();
    }
        
    ?>
    
    <!-- <button><a href="cour7 login.php" target="_blank" rel="noopener noreferrer">login</a></button> -->
</body>
</html>
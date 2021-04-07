<?php
$myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');
if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];

    $allposts = $myBase->query('SELECT post_id, user_id FROM posts WHERE user_id='.$user_id);
    
    while($post = $allposts->fetch()){

        $post_id = $post['post_id'];
        $myBase->query("DELETE FROM comments WHERE post_id = $post_id ") or die($myBase->error());
    }
    
    $myBase->query("DELETE FROM posts WHERE user_id= $user_id ") or die($myBase->error());

    $myBase->query("DELETE FROM comments WHERE user_id= $user_id ") or die($myBase->error());

    $myBase->query("DELETE FROM users WHERE user_id= $user_id ") or die($myBase->error());

    header("location: admin page.php");
}
?>
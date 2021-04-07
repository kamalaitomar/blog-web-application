<?php
$myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');
if (isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    
    $myBase->query("DELETE FROM posts WHERE post_id= $post_id ") or die($myBase->error());
    $myBase->query("DELETE FROM comments WHERE post_id= $post_id ") or die($myBase->error());
    header("location: admin comment.php");
}
?>
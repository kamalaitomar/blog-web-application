<?php
$myBase = new PDO('mysql:host=localhost;dbname=new_blog', 'root', '');
if (isset($_GET['comment_id'])){
    $comment_id = $_GET['comment_id'];
    $myBase->query("DELETE FROM comments WHERE comment_id= $comment_id ") or die($myBase->error());
    header("location: admin comment.php");
}
?>
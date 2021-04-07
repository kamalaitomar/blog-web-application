<?php
    session_start();
    if(isset($_SESSION['usernam'])){
        session_destroy();
        echo "<script>location.href='login.php'</script>";
    }
?>
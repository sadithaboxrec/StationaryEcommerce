<?php

if(!isset($_SESSION['authentication'])){
    redirect('login.php', "Login to Continue");
}

?>
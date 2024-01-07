<?php
    session_start();
    echo "Session: ".$_SESSION['token']."<br />";
    print_r($_SESSION);
?>
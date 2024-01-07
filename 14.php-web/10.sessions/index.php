<?php 
    session_start();

    $_SESSION['token'] = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9';

    print_r($_SESSION);
?>
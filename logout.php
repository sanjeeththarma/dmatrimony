<?php
    session_start(); // start session
    session_destroy();  // Delete whole session
    header("Location: login.html");
?>
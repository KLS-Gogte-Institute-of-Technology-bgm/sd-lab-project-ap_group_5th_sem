<?php
//start session
session_start();
//destroy session
session_destroy();
header("Location:index.html");
?>
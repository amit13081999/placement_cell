<?php
session_start();
session_destroy();
header("Location:http://localhost/Placement_Cell/login.html");
?>
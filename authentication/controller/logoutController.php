<?php 
require("../includes/functions.php");

session_destroy();
header("Location: " . BASE_URL . "index.php");
exit();
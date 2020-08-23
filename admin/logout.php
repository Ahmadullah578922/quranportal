
<?php

include "inc/dbh.php";

session_start();
session_unset();
session_destroy();
header("Location: {$hostname}/admin/");

?>

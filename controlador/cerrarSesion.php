<?php
session_start();
//session_unset("idPrivilegio");
session_destroy();

header("location: ../index.php");
?>

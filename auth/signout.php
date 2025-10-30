<?php
session_start();
session_unset();
session_destroy();
header("Location: /A&RDuties/auth/signin");
exit;

?>
<?php
session_start();
session_destroy();
header("Location: ../views/logeo.php");
exit;
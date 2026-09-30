<?php
session_start();
session_destroy();

header("Location: ../log.php?pesan=logout");
exit;
?>
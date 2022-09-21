<?php
unset( $_SESSION['USER']);
session_destroy();
redirect(SITE_PATH."?page=login");
?>

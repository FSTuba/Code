<?php
session_start();
$_SESSION['userName'] = "Kao";

echo $_SESSION['userName'];
echo '</br>';
echo session_save_path();
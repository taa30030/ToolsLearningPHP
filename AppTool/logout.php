<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="../AppTool/login.php">Go back To Login</a>';
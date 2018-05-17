<?php

setcookie('logged_in', false, time -1);
header('Location: http://etestas.lt/mysql/cookie/login.php');
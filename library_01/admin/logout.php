<?php
session_start();
unset($_SESSION['LOGIN']);
unset($_SESSION['SUPER_LOGIN']);
unset($_SESSION['LOGIN_PROF']);
unset($_SESSION['department']);
header("location:../");
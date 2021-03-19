<?php
session_start();
unset($_SESSION['SUPER_LOGIN']);
unset($_SESSION['LOGIN']);
header("location:../");
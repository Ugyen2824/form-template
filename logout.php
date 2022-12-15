<?php

include 'db.php';

unset($_SESSION);
session_destroy();

header("location:index.php");
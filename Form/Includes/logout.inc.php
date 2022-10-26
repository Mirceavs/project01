<?php

session_start();
session_unset();
session_destroy();

header("location: ../Php/Home.php");
       exit();
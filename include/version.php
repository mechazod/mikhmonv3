<?php
if (!isset($_SESSION["taskmaster"])) {
    header("Location:../taskmaster.php?id=login");
  } else {
        $_SESSION["v"] = "3.20 06-30-2021";
    
    }

<?php
require_once "../config.php";


if(isset($_GET['pg'])){
    if(in_array($_GET['pg'], ROUTE)){
        include "../pages/".$_GET['pg'].".php";
    }else{
        include "../pages/404.php";
    }
}else{
    include "../pages/home.php";
}

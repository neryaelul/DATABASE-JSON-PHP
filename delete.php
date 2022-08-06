<?php
    // We get the DBJsonCon.php file 
    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    $DBJsonCon = $docRoot . '/config/DBJsonCon.php';
    require_once $DBJsonCon;

    // Delete By Column
    //  $QRemove = $DBJ->removeLine(Value,Column,Group);
    $QRemove = $DBJ->removeLine("email@ex.com","Email","Customers");
    echo $QRemove;
?>
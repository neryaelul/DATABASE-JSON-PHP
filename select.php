<?php
    // We get the DBJsonCon.php file 
    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    $DBJsonCon = $docRoot . '/config/DBJsonCon.php';
    require_once $DBJsonCon;

    // Select By Column
    //  $QGet = $DBJ->getLine(Value,Column,Group);

    $QGet = $DBJ->getLine("email@ex.com","Email","Customers");
    if($QGet != 0){
        print_r($QGet);
    } 
?>
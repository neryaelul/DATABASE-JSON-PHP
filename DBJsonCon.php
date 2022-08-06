<?php
    // We connect the config class file
    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    $DBJsonClass = $docRoot . '/config/DBJsonClass.php';
    require_once $DBJsonClass;
    
    $DBJ = new DBJ();

    // We get the Data from our JSON File
    $dbTableJson = $docRoot . '/DB/db.json';
    $DBJ->jsonFileLocation = $dbTableJson;
?>
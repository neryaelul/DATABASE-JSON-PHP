
<?php
    // We get the DBJsonCon.php file 
    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    $DBJsonCon = $docRoot . '/config/DBJsonCon.php';
    require_once $DBJsonCon;
    
    // Update By Column
    //  $QUpdate = $DBJ->update(Value,Column,NewValue,Group);
    $QUpdate = $DBJ->update("email@ex.com","Email","newemail@ex.com","Customers");
    echo $QUpdate;


    
?>    




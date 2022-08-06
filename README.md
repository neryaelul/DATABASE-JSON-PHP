# Database-JSON-PHP
  Simple Class for Use JSON File as Database with PHP Function like Add,Get,Update and Remove.
    
    
Ex Add Get Line.
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


Ex Add New Line.
<?php
          // We get the DBJsonCon.php file 
          $docRoot = $_SERVER['DOCUMENT_ROOT'];
          $DBJsonCon = $docRoot . '/config/DBJsonCon.php';
          require_once $DBJsonCon;

          // Insert Query 
          $q = $DBJ->addLine('
                  {
                      "Name" : "Edi Cohen",
                      "Email": "ediedi@ex.com",
                      "City" : "Tel Aviv"
                  }
          ',"Customers");
          echo $q;
?>        

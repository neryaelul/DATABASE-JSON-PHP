# Database-JSON-PHP
  Simple Class for Use JSON File as Database with PHP Function like Add,Get,Update and Remove.
## We need Select our file in Config/DBJsonCon.php
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
## Add this lines for Start to work

    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    $DBJsonCon = $docRoot . '/config/DBJsonCon.php';
    require_once $DBJsonCon;
    
## Get
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


## Add
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
    
 ## Update
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
 ## Remove
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

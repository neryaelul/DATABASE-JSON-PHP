<?php

    class DBJ {
        public $jsonFileLocation = "";
        public function getLine($value,$col,$group){
            $jsonFileData = file_get_contents($this->jsonFileLocation);
            $dataDB = json_decode($jsonFileData, true);

            // $getLine = json_decode($line, true);
            $res = 0;
            foreach($dataDB[$group] as $keyColDB => $valueColDB){
                if($dataDB[$group][$keyColDB][$col] == $value){
                    $status = 1;
                    $res = $dataDB[$group][$keyColDB];
                }
            }
            //$res = array("status" => $status,"found" => $foundArr);
            return $res;
            
        }
        public function addLine($line,$group){
            $jsonFileData = file_get_contents($this->jsonFileLocation);
            $dataDB = json_decode($jsonFileData, true);

            $newLine = json_decode($line, true);
            $newArr = array_push($dataDB[$group], $newLine);

            $newJson = json_encode($dataDB, JSON_UNESCAPED_UNICODE);
            file_put_contents($this->jsonFileLocation, $newJson);
            return '<hr /><br />' . $dataDB . '<br />';
            
        }
        public function removeLine($value,$col,$group){
            $jsonFileData = file_get_contents($this->jsonFileLocation);
            $dataDB = json_decode($jsonFileData, true);

            // $delLine = json_decode($line, true);
            $status = "Not found...";
            foreach($dataDB[$group] as $keyColDB => $valueColDB){
                if($dataDB[$group][$keyColDB][$col] == $value){
                    unset($dataDB[$group][$keyColDB]);
                    $status = "Deleted";
                }
            }
            $newJson = json_encode($dataDB, JSON_UNESCAPED_UNICODE);
            file_put_contents($this->jsonFileLocation, $newJson);
            return $status;
            
        }
        public function update($value,$col,$newValue,$group){
            $jsonFileData = file_get_contents($this->jsonFileLocation);
            $dataDB = json_decode($jsonFileData, true);

            // $delLine = json_decode($line, true);
            $status = "Not found...";
            foreach($dataDB[$group] as $keyColDB => $valueColDB){
                if($dataDB[$group][$keyColDB][$col] == $value){
                    $dataDB[$group][$keyColDB][$col] = $newValue;
                    $status = "Updated";
                }
            }
            $newJson = json_encode($dataDB, JSON_UNESCAPED_UNICODE);
            file_put_contents($this->jsonFileLocation, $newJson);
            return $status;
            
        }
        public function arrayJson(){
            $jsonFileData = file_get_contents($this->jsonFileLocation);
            return json_decode($jsonFileData, true);
        }

    }



?>
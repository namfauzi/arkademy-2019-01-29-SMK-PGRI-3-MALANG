<?php

class conn extends PDO 
{
    public function __construct() {
        try {
            parent :: __construct("mysql:host=localhost;dbname=arkademy", "mysql", "root0120");
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         //  echo "success";
        } catch (PDOException $exc) {
            echo $exc;
        }
    }
}




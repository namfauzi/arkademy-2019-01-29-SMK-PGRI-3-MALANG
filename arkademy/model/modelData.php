<?php

include '../db/conn.php';


class modelData extends conn
{
    public function __construct()   {
    parent :: __construct();
    }

    public function list()      
    {
        $stmt;
        $stmt =$this->prepare("SELECT 
        a.name as names, a.person_id as person_ids, b.name, 
         GROUP_CONCAT(DISTINCT b.name
         ORDER BY b.name SEPARATOR ',')as person_hobbies
              FROM
     categories a , hobbies b WHERE a.person_id =b.person_id
     GROUP BY a.person_id
     ORDER BY a.person_id;");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

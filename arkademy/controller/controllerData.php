<?php

include '../model/modelData.php';

class controllerData 
{
    public $model;

    public function __construct() {
        $this->model = new modelData();
    }
    public function list()
    {   
        return $this->model->list();
    }
}

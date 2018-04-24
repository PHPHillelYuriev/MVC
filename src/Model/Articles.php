<?php 
require_once ROOT . '/Core/Model.php';

class Articles extends Model
{
    public function getData()
    {
        $data = require_once ROOT . '/DB.php';
        
        return $data;
    }
    
}
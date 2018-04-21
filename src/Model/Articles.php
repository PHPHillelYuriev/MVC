<?php 
require '../app/Core/Model.php';
// namespace Model;

// use Core\Model;



class Articles extends Model
{
    public function getData()
    {
        $data = require ROOT . '/DB.php';
        
        return $data;
    }
    
}
<?php 
namespace Model;

use Core\Model;

class Articles extends Model
{
    public function getData() : array
    {
        $data = require ROOT . '/DB.php';
        
        return $data;
    }
    
}
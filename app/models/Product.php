<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $table = "sanpham";

    public function getProduct()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
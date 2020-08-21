<?php

namespace App\Imports;

use App\Product;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Product([
           'thumbnail_path'=> $row[0],
           'name'    => $row[1],
           'pricee' => $row[2],
           'description' => $row[3],
        ]);
    }
}

<?php
namespace App\Http\Export;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    public function collection()
    {
        return Product::all();
    }
}
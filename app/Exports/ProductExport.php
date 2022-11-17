<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection,WithHeadings {

    public function collection()
    {
        return Product::query()->select('id','name','img','price','barcode','details')->get();
    }

    public function headings(): array{

        return [

            'id',
            'name',
            'img',
            'price',
            'barcode',
            'details'

        ];
    }
}

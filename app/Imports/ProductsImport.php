<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;

class ProductsImport implements  ToCollection, WithHeadingRow{

//    public function model(array $row){
//
//        return new Product([
//
////            'name'     => $row[0],
////            'barcode'    => $row[1],
////            'price'    => $row[2],
////            'details'    => $row[3],
//
//            'name' => $row['name'],
//            'img' => $row['img'],
//            'price' => $row['price'],
//            'barcode' => $row['barcode'],
//            'details' => $row['details'],
//
//
//        ]);
//    }


    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            $product = Product::find($row['id']);
            $product->name = $row['name'];
            $product->img = $row['img'];
            $product->price = $row['price'];
            $product->barcode = $row['barcode'];
            $product->details = $row['details'];
            $product->save();
        }
    }
}

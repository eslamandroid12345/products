<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'img',
        'barcode',
        'price',
        'details',
        'status'

    ];

    public function status() : string{

        return $this->status == 1 ? 'ظاهر' : 'مخفي';
    }
}

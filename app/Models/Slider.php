<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [

        'advertisement',
        'status'
    ];


    public function status() : string{

        return $this->status == 1 ? 'ظاهر' : 'مخفي';
    }
}

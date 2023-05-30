<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function detail(){
        return $this->HasOne(Detail::class);
    }
}

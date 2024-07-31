<?php

namespace App\Models;
use App\Models\Hp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hp extends Model
{
    use HasFactory;

    public $table = "merk.hp";

    protected $fillable = [
        "id",
        "hp",
        "keterangan"
    ];
}

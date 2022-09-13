<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $table = "center";
    protected $primaryKey = "id_center";
    protected $fillable = ['name', 'headquarter', 'heading', ]; //
}

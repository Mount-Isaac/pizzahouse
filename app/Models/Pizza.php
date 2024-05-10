<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // override the table the  model is connected to
    // protected $table  = 'table_name'
    use HasFactory;
}

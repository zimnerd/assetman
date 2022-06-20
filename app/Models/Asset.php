<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable= [
       'location','site','bardcode','serial-number','name','description','comments','department','category','brand','model','cost','image','purchase-from','purchase-date'
    ];
}

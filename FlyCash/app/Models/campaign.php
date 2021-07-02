<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = ['title','sdate','edate','image','id'];
}

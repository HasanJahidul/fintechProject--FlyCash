<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginuser extends Model
{
    use HasFactory;
    const UPDATED_AT =  'last_loggedin';
    const CREATED_AT =  'date_added';
}

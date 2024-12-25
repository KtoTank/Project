<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zayavki extends Model
{
    use HasFactory;
    protected $fillable = ['nomer', 'text', 'userid'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contragent extends Model
{
    use HasFactory;

    protected $table = 'contragents';
    public $timestamps = false;
    protected $guarded = [];
}

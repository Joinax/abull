<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ScanView extends Model
{
    use HasFactory;

    protected $table = 'scan';
    public $timestamps = false;

    // public function viewscan(){ 
        
    //     $scanvin = DB::table('scan')
    //         ->latest('id')
    //         ->first();
           
    //     return (array)$scanvin;
        
    // }
    
}

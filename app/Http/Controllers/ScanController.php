<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScanView;

class ScanController extends Controller
{
    public function secure(){

        // return view('secure');
        $scanview = ScanView::latest('id')
                            ->first();
        dd($scanview);
    }
}

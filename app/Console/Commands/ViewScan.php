<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class ViewScan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ViewScan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';



    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $scanvin = $this->index();
        dd($scanvin);
    }

    public function index(){ 

        $scanvin = DB::table('scan')->get();

        return view('scan_name', ['scan' => $scanvin]);
    }
        
        
    
}

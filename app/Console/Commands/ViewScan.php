<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

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
        $scanvin = $this->viewscan();
        dd($scanvin);
    }

    public function viewscan(){ 

        $scanvin = DB::table('scan')
            ->latest('id')
            ->first();
           
        //$scanvin[] = $scanvins;
        return $scanvin;
        
    }
        
        
    
}

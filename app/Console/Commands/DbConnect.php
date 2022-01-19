<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DbConnect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DbConnect';

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
        //DB::insert('insert into scan (scan_name, scan_date) values (?, ?)', ['tests', 23.09]);
        //DB::delete('delete from scan');
        DB::table('scan')->truncate();
    }

    
}

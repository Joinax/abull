<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ScanDir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ScanDir';

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
        $list = $this->listdir_by_date('./storage/app/public/upload/');
        dd($list[0][0][0], $list[0][1]);
        //dd($list);
    }

    public function listdir_by_date($path){ 
        $dir = opendir($path);
        $list = array();
        while ($file = readdir($dir)){
            
            if ($file != '.' and $file != '..' and $file != 'test'){
                $ctime = filectime($path . $file);
                //$dat = \Carbon\Carbon::createFromTimestamp($ctime)->format('Y-m-d h:i:s');
                //$dat = \Carbon\Carbon::createFromTimestamp($ctime)->toDateTimeString();               
                $dat = getdate ($ctime);
                $list[] = [$dat, $file];
                DB::insert('insert into scan (scan_name, scan_date) values (?, ?)', [ $list[0][1], $list[0][0][0]]);
                // if (!file_exists('./storage/app/public' . '/' . $dat))
                // mkdir('./storage/app/public' . '/' . $dat); 
                // rename($path . $file, './storage/app/public' . '/' .  $dat . '/' . $file);

            }
        }
        closedir($dir);
        return $list;
        
    }
}

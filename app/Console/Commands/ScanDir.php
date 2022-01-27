<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

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
    }

    public function listdir_by_date($path){ 
        $dir = opendir($path);
        $list = array();
        while ($file = readdir($dir)){          
            if ($file != '.' and $file != '..' and $file != 'test'){
                $ctime = filectime($path . $file);
                $date = \Carbon\Carbon::createFromTimestamp($ctime)->format('d-m-y');
                //$dat = \Carbon\Carbon::createFromTimestamp($ctime)->toDateTimeString();               
                //$date = getdate ($ctime);              
                $list = [$date, $file];
                $row = Event::create([
                    'type' => 1,
                    'file_name' => $list[1]
                ]);
                if (!file_exists('./storage/app/public' . '/' . $date))
                mkdir('./storage/app/public' . '/' . $date); 
                rename($path . $file, './storage/app/public' . '/' .  $date . '/' . $file);
            }
        }
        closedir($dir);
        return $list;
    }
}

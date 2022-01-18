<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        dd($list);
    }

    public function listdir_by_date($path){ 
        $dir = opendir($path);
        $list = array();
        while ($file = readdir($dir)){
            
            if ($file != '.' and $file != '..' and $file != 'test'){
                
                // кроме даты создания файлы добавляем ещё и имя
                // чтобы удостоверится, что мы не заменяем ключ массива
                // $ctime = filectime($data_path . $file) . ',' . $file;
                // UPD:
                $ctime = filectime($path . $file);
                //$dat = \Carbon\Carbon::createFromTimestamp($ctime)->format('Y-m-d');
                // $date_mas = getdate ($ctime);
                // if ($date_mas['mday'] < 10) {$date_mas['mday'] = '0'.$date_mas['mday'];}
                // if ($date_mas['mon'] < 10) {$date_mas['mon'] = '0'.$date_mas['mon'];}
                // $dat = $date_mas["mday"] . " . " . $date_mas["mon"] . " . " . $date_mas["year"];
                $list[] = [$dat, $file];
                
                if (!file_exists('./storage/app/public' . '/' . $dat))
                mkdir('./storage/app/public' . '/' . $dat); 
                rename($path . $file, './storage/app/public' . '/' .  $dat . '/' . $file);

            }
        }
        closedir($dir);
        return $list;
    }
}

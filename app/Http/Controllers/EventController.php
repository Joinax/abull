<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Contragent;
use App\Console\Commands\ScanDir;
use Illuminate\Http\Request;
use Mockery\Undefined;
use PhpParser\Node\Stmt\Foreach_;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $event = Event::where('status', false)->first();
        $agents = Contragent::all();
        if (!$event) {
            $event = new Event();
        }
        return view('app/secure', compact('event', 'agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $data = request()->validate([
            'file_name' => 'string',
            'reason' => '',
            'contragent' => '',
        ]);
        $event->status = true;
        $event->update($data);

        /*Переносим файл из upload*/

        $path = '../storage/app/public/upload/';
        $dir = opendir($path);
            while ($file = readdir($dir)){          
                if ($file != '.' and $file != '..' and $file != 'test'){
                    $ctime = filectime($path . $file);
                    $date = \Carbon\Carbon::createFromTimestamp($ctime)->format('d-m-y');
            if (!file_exists('../storage/app/public' . '/' . $date))
            mkdir('../storage/app/public' . '/' . $date); 
            rename($path . $file, '../storage/app/public' . '/' .  $date . '/' . $file);
                }
            }
        closedir($dir);
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}

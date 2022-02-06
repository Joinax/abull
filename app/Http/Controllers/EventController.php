<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Contragent;
use App\Console\Commands\ScanDir;
use Illuminate\Http\Request;
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
        $events = Event::where('status', false)->first();
        $agents = Contragent::all();
        return view('app/secure', compact('events', 'agents'));
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
        // dd($event->update($data));
        // dd($data);
        $event->status = true;
        $event->update($data);
        // $event->file_name = $data['file_name'];
        // $event->reason = $data['reason'];
        // $event->contragent= $data['contragent'];
        // $event->save();
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

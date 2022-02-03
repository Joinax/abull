<?php

namespace App\Http\Controllers;

use App\Models\Contragent;
use Illuminate\Http\Request;

class ContragentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agentsArr = [
            [
                'contragent' => 'АТЛ+'
            ],
            [
                'contragent' => 'ДЛ-Транс'
            ],
            [
                'contragent' => 'Интракт'
            ],
            [
                'contragent' => 'Сервис Транс'
            ],
            [
                'contragent' => 'Бертчи Раша'
            ],
            [
                'contragent' => 'Бертчи Владимир'
            ],
            [
                'contragent' => 'Бертчи НН'
            ],
            [
                'contragent' => 'Бертчи Москва'
            ],
            [
                'contragent' => 'Звонков ИП'
            ],
            [
                'contragent' => 'Автокар'
            ],
            [
                'contragent' => 'ТЭК Нровдвест'
            ],
            [
                'contragent' => 'Гарпун'
            ],
            [
                'contragent' => 'БИГ Сити'
            ],
        ];

         foreach ($agentsArr as $agent){
             Contragent::create($agent);
         }
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
     * @param  \App\Models\Contragent  $contragent
     * @return \Illuminate\Http\Response
     */
    public function show(Contragent $contragent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contragent  $contragent
     * @return \Illuminate\Http\Response
     */
    public function edit(Contragent $contragent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contragent  $contragent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contragent $contragent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contragent  $contragent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contragent $contragent)
    {
        //
    }
}

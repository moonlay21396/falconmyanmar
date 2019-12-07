<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\CustomClass\CardData;
use App\CustomClass\Path;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.card')->with([
            'url' => 'card'
        ]);
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
        // Card::create([
        //     'name' => $request->get('name'),
        //     'description' => $request->get('des')
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Card::findOrFail($id);
        return json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        Card::findOrFail($id)->update([
            'name' => $request->get('name'),
            'description' => $request->get('des')
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Card::findOrFail($id)->delete();
    }
    public function get_all_card(){
        $cards = Card::orderBy('id', 'desc')->get();
        $arr = [];
        foreach ($cards as $data) {
            $card_data = new CardData($data->id);
            array_push($arr, $card_data->getCardData());
        }
        return json_encode($arr);
    }
}

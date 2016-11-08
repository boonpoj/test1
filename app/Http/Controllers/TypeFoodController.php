<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTypeFoodRequest;

use App\Http\Requests;
use App\TypeFood;

class TypeFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typefood = TypeFood::paginate(4);
        //$typefood = TypeFood::all();
        return view('typefood.index',[
            'typefoods' => $typefood,
            'title' => 'ประเภทอาหาร'
        ]); //typefood/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typefood.create'); //typefood/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeFoodRequest $request)
    {
        
        $typefood = new TypeFood();
        // $typefood -> name = $request -> name;
        // $typefood -> save();
        $typefood -> create($request -> all());//add fillable to model

        return redirect() -> action('TypeFoodController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typefood = TypeFood::find($id);
        return view('typefood.show',[
            'typefood' => $typefood
        ]); //typefood/show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typefood = TypeFood::find($id);
        return view('typefood.edit', [
            'typefood' => $typefood
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTypeFoodRequest $request, $id)
    {
        $typefood = TypeFood::find($id);
        // $typefood -> name = $request -> name;
        // $typefood -> save();
        $typefood -> update($request -> all());
        return redirect() -> action('TypeFoodController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TypeFood::destroy($id);
        return redirect() -> action('TypeFoodController@index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = [];
        $property['plots'] = DB::table('posts')->select('id','image','title','body')->get();
        // $property['conference'] = DB::SELECT('select * FROM people WHERE user_id =?',[$id]);
        // $property['office'] = DB::SELECT('select * FROM commercialvehicle WHERE user_id =? && confirmation=0',[$id]);
        return view('welcome')->with('property', $property);

            //         public function pdf(){
            //             $id = Auth::user()->id ;
            //             $carbon = new Carbon(); 
            //      $data = [];
            //      $data['carbon']=$carbon;
            //         $data['datapresence']=DB::SELECT('select * FROM people WHERE user_id =?',[$id]);
            //         $data['activeprescription']=DB::SELECT('select * FROM commercialvehicle WHERE user_id =? && confirmation=0',[$id]);

            // $pdf = PDF::loadView('pages.invoicecommercial', $data);
            // return $pdf->stream('venuscommercial.pdf');
            // // return $pdf->download('invoice.pdf');
            // }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

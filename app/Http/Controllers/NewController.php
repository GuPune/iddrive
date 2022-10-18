<?php

namespace App\Http\Controllers;

use App\Models\NewContent;
use Illuminate\Http\Request;
use App\CoreFunction;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = NewContent::where('id',6)->first();

       $userconnect = CoreFunction\Cutstr::findimgInhtml($data->des);


        return view('pages.new.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.new.form');
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

       $n_text = htmlentities(addslashes($request->detail));
       $n_code = CoreFunction\Cutstr::random_password(20);


      $save = NewContent::create([
        'title' => $request->title,
        'des' => $n_text,
        'url' => $request->url,
        'keyword' => $request->keyword,
        'n_code' => $n_code,
        'view' => 0,
        'status' => 'Y'
    ]);

        return 1;
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

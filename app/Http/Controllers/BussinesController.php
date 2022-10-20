<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewContent;
use App\CoreFunction;

class BussinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //


       $data = NewContent::whereIn('status', ['Y', 'N'])->where('type','2')->get();


        return view('pages.bussines.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.bussines.form');
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

       $n_text = htmlentities($request->detail);

       $n_code = CoreFunction\Cutstr::random_password(20);


      $save = NewContent::create([
        'title' => $request->title,
        'des' => $n_text,
        'url' => $request->url,
        'keywords' => $request->keyword,
        'n_code' => $n_code,
        'view' => 0,
        'type' => 2,
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
        $data = NewContent::where('id',$id)->first();
        return view('pages.bussines.formedit')->with('data',$data);
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
        $n_text = htmlentities($request->detail);
        $updatecontent = NewContent::where('id',$id)->update([
        'title' => $request->title,
        'des' => $n_text,
        'url' => $request->url,
        'keywords' => $request->keyword,
        'status' => $request->status
        ]);
        return response()->json([
            'msg_return' => 'บันทึกสำเร็จ',
            'code_return' => 1,
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
        //

        $dele = NewContent::where('id',$id)->update(['status' => 'D']);


        return response()->json([
            'msg_return' => 'บันทึกสำเร็จ',
            'code_return' => 1,
        ]);

    }
}

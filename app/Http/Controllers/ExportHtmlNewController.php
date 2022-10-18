<?php

namespace App\Http\Controllers;

use App\Models\NewContent;
use Illuminate\Http\Request;


class ExportHtmlNewController extends Controller
{
    //

    public function index(Request $request,$id)
    {
        //


 //   dd($id);

 $gethtml = NewContent::where('n_code',$id)->value('des');


return view('export')->with('data',$gethtml);
    }

}

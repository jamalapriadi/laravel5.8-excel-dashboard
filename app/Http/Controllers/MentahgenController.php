<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\Mentahgen;
use Excel;
use App\Jobs\ImportMentahgen;

class MentahgenController extends Controller
{
    public function storeData(Request $request)
    {
        $this->validate($request,[
            'file'=>'required'
        ]);

        if($request->hasFile('file')){
            $file=$request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();

            $file->storeAs(
                'public', $filename
            );

            #membuat job dengan mengirimkan parameter filename
            ImportMentahgen::dispatch($filename);
            // dispatch(new ImportMentahgen($filename));
            // Excel::import(new MentahgenImport, $file);
            return redirect()->back()->with(['success'=>'upload success']);
        }

        return redirect()->back()->with(['error'=>'Please choose file before']);
    }
}

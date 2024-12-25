<?php

namespace App\Http\Controllers;

use App\Models\zayavki;
use Illuminate\Http\Request;

class zayavkiController extends Controller
{
    public function viewZayavki()
    {
        $userid = auth()->id();
        $data = zayavki::where('userid', $userid)->get();
        return view('zyavki', compact('data'));
    }

public function viewform()
{
return view('createzayvki');
}
    public function otpravkazayvki(Request $request)
    {
       
        $request->validate([
           
            'nomer' => 'required|string',
           
            'texts' => 'required|string',
        ]);
    
       
        $newRequest = new zayavki([ 

            'nomer' => $request->nomer, 
            'text' => $request->texts,

            'userid' => auth()->id(),
        ]);

        $newRequest->save();
        return redirect()->route('index')->with('success', 'Заявка успешно отправлена!');
    }

}

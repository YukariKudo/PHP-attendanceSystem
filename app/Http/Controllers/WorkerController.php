<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Dayoff;

class WorkerController extends Controller
{
    public function apply3(){
      return view ('worker.create3');
    }
    public function create3(Request $request)
    {
      $this->validate($request, Dayoff::$rules);
      
      $dayoff = new Dayoff;
      $form = $request->all();
      
      $dayoff->fill($form);
      $dayoff->user_id = Auth::id();
      $dayoff->save();
      
      return redirect('worker/create3');
    }
    public function index(Request $request)
    {
      return view('worker.index');
    }
}

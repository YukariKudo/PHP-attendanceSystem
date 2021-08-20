<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use App\Holiday;
use App\Dayoff;

class WorkerController extends Controller
{
    public function apply(){
      return view ('worker.create');
    }
    public function create(Request $request)
    {
      $this->validate($request, Worker::$rules);
      
      $worker = new Worker;
      $form = $request->all();
      
      $worker->fill($form);
      $worker->save();
      
      return redirect('worker/create');
    }
    public function apply2(){
      return view ('worker.create2');
    }
    public function create2(Request $request)
    {
      $this->validate($request, Holiday::$rules);
      
      $holiday = new Worker;
      $form = $request->all();
      
      $holiday->fill($form);
      $holiday->save();
      
      return redirect('worker/create2');
    }
    public function apply3(){
      return view ('worker.create3');
    }
    public function create3(Request $request)
    {
      $this->validate($request, Dayoff::$rules);
      
      $dayoff = new Dayoff;
      $form = $request->all();
      
      $dayoff->fill($form);
      $dayoff->save();
      
      return redirect('worker/create3');
    }
    public function index(Request $request)
  {
      return view('worker.index');
  }
}

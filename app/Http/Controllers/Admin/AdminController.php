<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function apply(){
      return view ('admin.create');
    }
    public function create()
    {
      return redirect('admin/create');
    }
    public function apply2(){
      return view ('admin.create2');
    }
    public function create2()
    {
      return redirect('admin/create2');
    }
    public function apply3(){
      return view ('admin.create3');
    }
    public function create3()
    {
      return redirect('admin/create3');
    }
    public function index()
    {
      return view('admin.index');
    }
    
}

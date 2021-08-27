<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Dayoff;

class AdminController extends Controller
{
    public function apply(){
      return view ('admin.create',['dayoffs'=>Dayoff::all()]);
    }
    public function create()
    {
      return redirect('admin/create');
    }
    public function index(Request $request)
    {
     return view('admin.index', ['users'=>User::all(),'hoge'=>'aaa']);
    }
    public function update(Request $request)
    {
      // Validationをかける
      $this->validate($request, Dayoff::$rules);
      // News Modelからデータを取得する
      $dayoff = Dayoff::find($request->id);
      // 送信されてきたフォームデータを格納する
      $dayoff_form = $request->all();
      // 該当するデータを上書きして保存する
      $dayoff->fill($dayoff_form)->save();

      return redirect('admin/create');
    }
}
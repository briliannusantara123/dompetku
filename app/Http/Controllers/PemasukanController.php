<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\Saldo;
use DB;

class PemasukanController extends Controller
{
    public function index()
    {
    	return view('pemasukan');
    }
    public function create(Request $request)
    {
    	$pemasukan = Pemasukan::create($request->all());
    	$saldo = new Saldo();
    	$saldo->user_id = $request->user_id;
    	$saldo->saldo = $request->pemasukan;
        $saldo->status = 1;
    	$saldo->save();
    	return redirect('/pemasukan')->with('success','Berhasil Menambahkan Pemasukan');
    }
    public function lp()
    {
        $uid = auth()->user()->id;
        $lp = DB::table('pemasukan')->where('user_id',$uid)->paginate(3);
        return view('laporan.pemasukan',compact('lp'));
    }
}

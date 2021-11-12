<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;
use App\Pemasukan;
use App\Saldo;
use DB;

class PengeluaranController extends Controller
{
     public function index()
    {
    	return view('pengeluaran');
    }
    public function create(Request $request)
    {
    	$pengeluaran = Pengeluaran::create($request->all());
    	$saldo = new Saldo();
    	$saldo->user_id = $request->user_id;
    	$saldo->saldo = $request->pengeluaran;
        $saldo->status = 2;
    	$saldo->save();

    	return redirect('/pengeluaran')->with('success','Berhasil Menambahkan Pengeluaran');
    }
    public function lp()
    {
        $uid = auth()->user()->id;
        $lp = DB::table('pengeluaran')->where('user_id',$uid)->paginate(3);
        return view('laporan.pengeluaran',compact('lp'));
    }
}

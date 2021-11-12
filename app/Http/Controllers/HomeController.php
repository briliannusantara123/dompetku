<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\User;
use Auth;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $uid = auth()->user()->id;
            $saldo = DB::table('saldo')
                ->where('user_id',$uid)
                ->where('status',1)
                ->sum('saldo.saldo');
            $kurang = DB::table('saldo')
                ->where('user_id',$uid)
                ->where('status',2)
                ->sum('saldo.saldo');
            $akhir = $saldo - $kurang;
        return view('welcome',compact('akhir'));
        }
        $hitung = DB::table('users')->count();
       
    	return view('welcome',compact('hitung'));
    }
    public function daftar()
    {
    	return view('daftar');
    }
    public function daftar_create(Request $request)
    {
    	$user = User::create([
    		'name' => $request->name,
    		'password' => bcrypt($request->password),
            'role' => 2,
    	]);
    	return redirect('/login')->with('success','Berhasil Membuat Akun');
    }
}

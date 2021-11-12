<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
    	$hitung = DB::table('users')->where('role',2)->count();
    	$total = DB::table('saldo')->where('status',1)->sum('saldo.saldo');
    	$tpemasukan = DB::table('pemasukan')->count();
    	$tpengeluaran = DB::table('pengeluaran')->count();
    	return view('admin.view',compact('hitung','total','tpemasukan','tpengeluaran'));
    }
}

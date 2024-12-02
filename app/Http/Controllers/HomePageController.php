<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function tulisan(){
        return "Ini adalah contoh response tanpa memanggil template view";
    }

    public function paramone(Request $request){
        $nilaiRef = $request->nama;
        $nilaiNim = $request->nim;
        return $nilaiRef.$nilaiNim;
    }

    public function paramtwo($varA, $varB, $varC){
        return $varA." ".$varB." ".$varC;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Sorgu extends Controller
{
    public function index(){
    	$ogrenciler = DB::select('select * from ogrenciler');
    	return view('ogrenci-view',['ogrenciler'=>$ogrenciler]);
  	}

  	public function login(Request $request){
    	//$ogrenciler = DB::select('select * from ogrenciler');
    	$kullanicilar = DB::select("select count(*) as sonuc from kullanicilar where kullanici_adi='".$request->isim."' and sifre='".$request->pass."'");
    	if($kullanicilar[0]->sonuc==1)
    	{
    		return view('basarili-login');
    	}
    	else
    	{
    		return view('basarisiz-login');
    	}
  	}

}

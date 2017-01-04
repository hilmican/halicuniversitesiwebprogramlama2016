<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Ogrenciler extends Controller
{
    
    public function kayit(Request $request)
    {

    	$sorgu = "insert into ogrenciler (numara, sifre, isim, soyisim) values ('".$request->numara."','".$request->sifre."','".$request->isim."','".$request->soyisim."')";
    	$sonuc = DB::select($sorgu);
     	return redirect('ogrenci-listele2');
    }

    public function listele()
    {
    	$sorgu = "select * from ogrenciler";
    	$sonuc = DB::select($sorgu);
    	return view('kayit-sonuc', Array('kayitlar'=>$sonuc));

    }

    public function listele2()
    {
        $sorgu = "select * from ogrenciler";
        $sonuc = DB::select($sorgu);
        return view('listele', Array('kayitlar'=>$sonuc));

    }

    public function sil(Request $req)
    {
    	DB::delete('delete from ogrenciler where id='.$req->id);
    	return $req->id." ID sine sahip ogrenci silinecek";
    }

    public function arrayOrnek()
    {
        $degiskenim = Array('basit', 'bir', 'array', 17);
        $degiskenim3 = Array('basit', 'bir', 'array', 'degil');
        $degiskenim2 = Array('birinci'=>'birinci item', 'ikinci'=>'ikinci item');

        $deneme_string = 'merhaba benim adim hilmi';
        $parcali = explode(' ', $deneme_string);
        $tamami = implode(' ', $degiskenim3);
        
        return view('array-ornek',Array('parametre'=>Array('ornek1'=>$degiskenim,'ornek2'=>$degiskenim2, 'ornek3'=>$parcali, 'ornek4'=> $tamami)));
    }

}

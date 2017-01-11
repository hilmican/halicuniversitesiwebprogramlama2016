<?php

namespace App\Http\Controllers;

use \App\Flight;
use \App\Seat;
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

    public function user_listele()
    {
        /*
        $flight = new Flight;
        $flight->adi ='test 4';
        $flight->sifre = '123';
        $flight->save();

        $seat = new Seat;
        $seat->adi = '4. ucusa ait';
        $seat->flight_id=4;
        $seat->save();
        */
        /*
        $user_listesi = \App\Flight::all();
        var_dump($user_listesi);
        */
/*
        $myFlight = \App\Flight::find(1);
        foreach ($myFlight->seat as $mySeat) {
            echo 'Koltuk adi:'.$mySeat->adi.' '.$myFlight->id.' ID li ucusa aittir <br>';
        }
*/

        
        $myFlight = \App\Flight::where('id',4)->first();
        echo '<table border="1"><tr><td>Koltuk Adı</td><td>Uçuş ID</td></tr>';
        foreach ($myFlight->seat as $mySeat) {
            echo '<tr><td>'.$mySeat->adi.'</td><td>'.$myFlight->id.'</td></tr>';
        }
        echo '</table><br><br>';

        echo '<table border="1"><tr><td>pilot Adı</td><td>Uçuş ID</td></tr>';
        foreach ($myFlight->pilot as $myPilot) {
            echo '<tr><td>'.$myPilot->adi.'</td><td>'.$myFlight->id.'</td></tr>';
        }
        echo '</table>';
        //var_dump($myFlight->Seat());
        //var_dump($myFlight);
    }

}

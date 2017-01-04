@extends('layouts.master')
@section('title', 'Öğrenci Kayıt Girişi')
   
@section('content')
<form action="/ogrenci-kayit" method="GET">
	İsim:<input type="text" name="isim"><br>
	Soyisim:<input type="text" name="soyisim"><br>
	Numara:<input type="text" name="numara"><br>
	Şifre:<input type="text" name="sifre"><br>
	<input type="submit" name="gonder" value="Kaydet">
</form>
@endsection
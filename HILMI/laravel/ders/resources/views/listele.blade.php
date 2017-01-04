@extends('layouts.master')
@section('title', 'Öğrenci Listele')
   
@section('content')
	<table>
  	@foreach ($kayitlar as $kayit)
    	<tr><td> {{ $kayit->isim }}</td><td><a href="/ogrenci-sil?id='.$kayitlar[$i]->id.'">Sil</a></td></tr>
	@endforeach
	</table>
@endsection
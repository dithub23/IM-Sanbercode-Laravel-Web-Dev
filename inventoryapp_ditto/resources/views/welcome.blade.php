
@extends('layouts.master')
@section('title')
    Halaman Welcome
@endsection

@section('content')
    <h1>SELAMAT DATANG</h1>

    <h2>Terima kasih {{$firstname}} {{$lastname}} telah bergabung di Sanberbook. Social Media</h2>
    <p>Alamat anda saat ini di {{$address}}</p>
@endsection
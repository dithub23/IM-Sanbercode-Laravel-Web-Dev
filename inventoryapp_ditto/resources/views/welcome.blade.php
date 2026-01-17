@extends('layouts.master')
@section('title', 'Welcome to Sanberbook')

@section('content')

<style>
    .welcome-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        position: relative;
        overflow: hidden;
        color: white;
    }
    .welcome-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url('https://www.transparenttextures.com/patterns/confetti.png') repeat;
        opacity: 0.15;
        pointer-events: none;
    }
    .welcome-content {
        position: relative;
        z-index: 2;
        padding: 8rem 1rem;
        text-align: center;
    }
    .welcome-title {
        font-size: 4.5rem;
        font-weight: 900;
        text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        animation: fadeInUp 1s ease-out;
    }
    .welcome-subtitle {
        font-size: 1.8rem;
        margin: 1.5rem 0 2rem;
        opacity: 0.95;
        animation: fadeInUp 1.2s ease-out;
    }
    .highlight-name {
        color: #ffdd57;
        font-weight: bold;
        text-shadow: 0 2px 8px rgba(255,221,87,0.6);
    }
    .address-info {
        font-size: 1.3rem;
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(10px);
        padding: 1.5rem;
        border-radius: 1.5rem;
        max-width: 600px;
        margin: 0 auto 3rem;
        animation: fadeInUp 1.4s ease-out;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .btn-explore {
        font-size: 1.4rem;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        transition: all 0.3s;
    }
    .btn-explore:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.3);
    }
</style>

<div class="welcome-hero">
    <div class="welcome-content container">
        <h1 class="welcome-title">SELAMAT DATANG!</h1>
        
        <h2 class="welcome-subtitle">
            Hai <span class="highlight-name">{{ $firstname }} {{ $lastname }}</span> 👋<br>
            Terima kasih telah bergabung di <strong>Sanberbook</strong> – Social Media Keren Buat Kamu!
        </h2>

        <div class="address-info">
            <strong>Alamatmu saat ini:</strong><br>
            <span style="font-size: 1.5rem; font-weight: 500;">{{ $address }}</span>
        </div>

        <p class="lead mb-5" style="max-width: 700px; margin: 0 auto;">
            Mulai sekarang, temukan teman baru, share momen seru, dan jadilah bagian dari komunitas terkeren!
        </p>

        <div class="d-flex justify-content-center gap-4 flex-wrap">
            <a href="/feed" class="btn btn-warning btn-lg btn-explore fw-bold shadow-lg">
                Jelajahi Feed Sekarang →
            </a>
            <a href="/profile" class="btn btn-outline-light btn-lg btn-explore">
                Lihat Profilku
            </a>
        </div>

        <!-- Optional: tambah icon atau confetti JS jika mau lebih interaktif -->
    </div>
</div>

@endsection
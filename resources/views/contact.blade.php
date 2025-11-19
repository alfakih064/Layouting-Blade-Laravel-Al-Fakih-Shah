@extends('layouts.layout')

@section('title', 'Contact')

@section('content')
<div class="contact-container">
    <h1>Contact Me</h1>
    <p>Silakan hubungi saya melalui form di bawah ini:</p>

    <form action="#" method="POST" class="contact-form">
        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" placeholder="Masukkan nama Anda">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email Anda">
        </div>

        <div class="form-group">
            <label>Pesan</label>
            <textarea name="message" rows="4" placeholder="Tulis pesan Anda"></textarea>
        </div>

        <button type="submit" class="btn">Kirim Pesan</button>
    </form>
</div>
@endsection

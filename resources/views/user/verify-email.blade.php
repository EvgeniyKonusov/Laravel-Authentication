@extends('layouts.main')

@section('title', 'Home page')

@section('content')
    
    <div class="alert alert-info" role="alert">
        Благодарим вас за регистрацию! Ссылка для подтверждения вашей регистрации была отправлена на ваш электронный адрес.
    </div>
    <div>
        Не получили ссылку?
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-link ps-0">Send link</button>
        </form>
    </div>

@endsection
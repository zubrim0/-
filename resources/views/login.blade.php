@extends('layouts\app')

@section('content')
    <div class="container mt-5">
        <h2>Вхід</h2>

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form method="post" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Електронна пошта</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit">Увійти</button>
        </form>
    </div>
@endsection

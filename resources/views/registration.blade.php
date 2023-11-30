@extends('layouts\app')

@section('content')
    <div class="container mt-5">
        <h2>Форма реєстрації</h2>
        <form method="post" action="{{ route('register.submit') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Ім'я</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Прізвище</label>
                <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" required>
                @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Стать</label>
                <select name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                    <option value="male">Чоловіча</option>
                    <option value="female">Жіноча</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nationality" class="form-label">Національність</label>
                <input type="text" name="nationality" class="form-control @error('nationality') is-invalid @enderror" required>
                @error('nationality')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="organization_name" class="form-label">Назва організації</label>
                <input type="text" name="organization_name" class="form-control @error('organization_name') is-invalid @enderror" required>
                @error('organization_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Посада</label>
                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" required>
                @error('position')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label">Дата народження</label>
                <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" required>
                @error('birthdate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Підтвердження пароля</label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" required>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Зареєструватися</button>
        </form>
    </div>
@endsection
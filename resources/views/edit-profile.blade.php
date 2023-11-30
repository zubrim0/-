@extends('layouts\app')

@section('content')
    <div class="container mt-5">
        <h2>Редагування профілю</h2>
         <form method="post" action="{{ route('edit-profile.update') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Ім'я</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Прізвище</label>
                <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{ $user->surname }}" required>
                @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Стать</label>
                <select name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                    <option value="male" @if($user->gender === 'male') selected @endif>Чоловіча</option>
                    <option value="female" @if($user->gender === 'female') selected @endif>Жіноча</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nationality" class="form-label">Національність</label>
                <input type="text" name="nationality" class="form-control @error('nationality') is-invalid @enderror" value="{{ $user->nationality }}" required>
                @error('nationality')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="organization_name" class="form-label">Назва організації</label>
                <input type="text" name="organization_name" class="form-control @error('organization_name') is-invalid @enderror" value="{{ $user->organization_name }}" required>
                @error('organization_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Посада</label>
                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ $user->position }}" required>
                @error('position')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label">Дата народження</label>
                <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" value="{{ $user->birthdate }}" required>
                @error('birthdate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
 <			button type="submit" class="btn btn-primary">Оновити профіль</button>
        </form>
    </div>
@endsection
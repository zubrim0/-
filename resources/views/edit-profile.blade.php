@extends('layouts/app')

@section('content')
    <body style="background-color: #8fc4b7;">
        <section class="h-100 h-custom" style="padding: 50px; margin: 50px;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-30 col-xl-20">
                        <div class="card rounded-5">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                                class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                                alt="Sample photo">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Редагування профілю</h3>

                                <form method="post" action="{{ route('edit-profile.submit') }}" class="px-md-2">
                                    @csrf

                                    @php
                                        $user = Auth::user();
                                    @endphp

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Ім'я</label>
                                        <input type="text" id="name" name="name" class="form-control" required
                                            value="{{ $user->name ?? old('name') }}" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="surname">Прізвище</label>
                                        <input type="text" id="surname" name="surname" class="form-control" required
                                            value="{{ $user->surname ?? old('surname') }}" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="gender">Стать</label>
                                        <select id="gender" name="gender" class="form-select" required>
                                            <option value="" disabled selected>Оберіть стать</option>
                                            <option value="male" {{ isset($user) && $user->gender === 'male' ? 'selected' : '' }}>
                                                Чоловіча</option>
                                            <option value="female" {{ isset($user) && $user->gender === 'female' ? 'selected' : '' }}>
                                                Жіноча</option>
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nationality">Національність</label>
                                        <input type="text" id="nationality" name="nationality" class="form-control" required
                                            value="{{ $user->nationality ?? old('nationality') }}" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="organization_name">Назва Організації</label>
                                        <input type="text" id="organization_name" name="organization_name" class="form-control" required
                                            value="{{ $user->organization_name ?? old('organization_name') }}" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="position">Посада</label>
                                        <input type="text" id="position" name="position" class="form-control" required
                                            value="{{ $user->position ?? old('position') }}" />
                                    </div>

                                    <div class="row mb-4 pb-2 pb-md-5">
                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="birthdate">Дата народження</label>
                                                <input type="date" id="birthdate" name="birthdate" class="form-control" required
                                                    value="{{ $user->birthdate ?? old('birthdate') }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" required
                                            value="{{ $user->email ?? old('email') }}" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Новий пароль</label>
                                        <input type="password" id="password" name="password" class="form-control" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password_confirmation">Підтвердження пароля</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-control" />
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg mb-1">Оновити профіль</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection

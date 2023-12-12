@extends('layouts\app')

@section('content')
    <body style="background-color: #8fc4b7;">
        <section class="h-100 h-custom" style="padding: 50px; margin: 50px;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-30 col-xl-20">
                        <div class="card rounded-5">
                            <img src="https://www.knuba.edu.ua/wp-content/uploads/2023/02/083638950fcaa5f20407be969ecba2dd-2.jpeg"
                                class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; max-height: 550px; object-fit: cover;"
                                alt="Sample photo">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Реєстрація</h3>

                                <form method="post" action="{{ route('register.submit') }}" class="px-md-2">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Ім'я</label>
                                        <input type="text" id="name" name="name" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="surname">Прізвище</label>
                                        <input type="text" id="surname" name="surname" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="gender">Стать</label>
                                        <select id="gender" name="gender" class="form-select" required>
                                            <option value="" disabled selected>Оберіть стать</option>
                                            <option value="male">Чоловіча</option>
                                            <option value="female">Жіноча</option>
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nationality">Національність</label>
                                        <input type="text" id="nationality" name="nationality" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="organization_name">Назва Організації</label>
                                        <input type="text" id="organization_name" name="organization_name" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="position">Посада</label>
                                        <input type="text" id="position" name="position" class="form-control" required />
                                    </div>

                                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                        <div class="col-md-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="birthdate">Дата народження</label>
                                                <input type="date" id="birthdate" name="birthdate" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Пароль</label>
                                        <input type="password" id="password" name="password" class="form-control" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password_confirmation">Підтвердження пароля</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg mb-1">Підтвердити</button>
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
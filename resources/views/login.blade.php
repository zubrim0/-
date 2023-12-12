@extends('layouts.app')

@section('content')
    <body style="background-color: #8fc4b7;">
        <section class="h-100 h-custom" style="padding: 50px; margin: 50px;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-30 col-xl-20">
                        <div class="card rounded-5">
                            <div class="card-body p-4 p-md-5">
                                <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Вхід</h2>

                                @if(session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <form method="post" action="{{ route('login') }}" class="px-md-2">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <label for="email" class="form-label">Електронна пошта</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password" class="form-label">Пароль</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg mb-1">Увійти</button>
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

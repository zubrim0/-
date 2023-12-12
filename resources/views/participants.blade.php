@extends('layouts/app')

@section('content')
    <body style="background-color: #8fc4b7;">
        <section class="h-100 h-custom" style="padding: 50px; margin: 50px;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-20 col-xl-20"> <!-- Оновлений розмір колонки -->
                        <div class="card rounded-5">
                            <div class="card-body p-4 p-md-5">
                                <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Список Учасників</h2>
                                @auth
                                    @if(count($participants) > 0)
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>№№</th>
                                                    <th>Ім'я та Прізвище</th>
                                                    <th>Назва Організації</th>
                                                    <th>Email</th>
                                                    <th>Дії</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($participants as $participant)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $participant->name }} {{ $participant->surname }}</td>
                                                        <td>{{ $participant->organization_name }}</td>
                                                        <td>{{ $participant->email }}</td>
                                                        <td>
                                                            @if(Auth::user()->id == $participant->id)
                                                                <a href="{{ route('participants.edit', ['participant' => $participant]) }}" class="btn btn-primary">Редагувати</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <p>Наразі немає зареєстрованих учасників.</p>
                                    @endif
                                @else
                                    <p>Для перегляду списку учасників потрібно увійти в систему.</p>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection

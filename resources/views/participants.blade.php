@extends('layouts\app')

@section('content')
    <div class="container mt-5">
        <h2>Список Учасників</h2>

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
@endsection

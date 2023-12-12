@extends('layouts.app')

@section('content')
 <body style="background-color: #8fc4b7;">
        <section class="h-100 h-custom" style="padding: 50px; margin: 50px;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-30 col-xl-20">
                        <div class="card rounded-5">
                            <div class="card-body p-4 p-md-5">
    @auth
        <div class="slider">
            @foreach ($slides as $slide)
                <img src="{{ asset($slide) }}" alt="Slide">
            @endforeach
        </div>
    @else
        <div class="container mt-5">
            <h2>Ласкаво просимо на конференцію!</h2>
            <p>Реєструйтеся та беріть участь в нашій захоплюючій конференції.</p>
            <p>Якщо ви вже маєте обліковий запис, увійдіть в систему та перегляньте список учасників.</p>
        </div>
    @endauth
@endsection

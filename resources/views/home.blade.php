@extends('main')

@section('title') Главная @endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 p-5">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <h1>Вы находитесь на главной</h1>
                    <hr>
                    @if(Auth::check())
                        <h5>Привет!</h5>
                        <a href="logout">Выйти</a>
                    @else
                        <div class="col-md-6 offset-md-4">
                        <a href="login">Войти</a> |
                        <a href="signup">Регистрация</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

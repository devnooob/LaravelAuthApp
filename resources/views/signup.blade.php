@extends('main')

@section('title') Регистрация @endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 p-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form method="POST" action="{{ route('signup') }}">
                            @csrf
                            <h3 class="text-center">Форма регистрации</h3>
                            <div class="form-group row my-6 p-3">
                                <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="Логин" required>
                            </div>
                            <div class="form-group row my-6 p-3">
                                <input class="form-control item" type="email" name="email" id="email" placeholder="Почта" required>
                            </div>
                            <div class="form-group row my-6 p-3">
                                <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Пароль" required>
                            </div>
                            <div class="form-group row my-6 p-3">
                                <input class="form-control item" type="password" name="password_confirmation" minlength="6" id="password_confirmation" placeholder="Подтверждение пароля">
                            </div>
                            <div class="form-group row my-6 p-3">
                                <button class="btn btn-primary btn-block create-account" type="submit">Регистрация</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('main')

@section('title') Вход @endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 p-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
                            <h3 class="text-center">Форма входа</h3>
                            <div class="form-group row my-6 p-3">
                                <input class="form-control item" type="text" name="name" id="name" placeholder="Логин" required>
                            </div>
                            <div class="form-group row my-6 p-3">
                                <input class="form-control item" type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group row my-6 p-3">
                                <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Пароль" required>
                            </div>
                            <div class="form-group row my-6 p-3">
                                <button class="btn btn-primary btn-block create-account" type="submit">Вход в аккаунт</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

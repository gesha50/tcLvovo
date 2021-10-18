@extends('layouts.app')
@section('content')
<div class="container">
    <div style="margin-bottom: 50px;" class="row px-3">
        <div class="col-md-6">
            <div style="margin-bottom: 30px;" class="brands__header">{{ __('Вход') }}</div>
            <div style="margin-bottom: 30px;" class="d-flex justify-content-around">
                <button disabled class="btn btn-info">Войти через Facebook</button>
                <button disabled class="btn btn-danger">Войти через Google</button>
            </div>
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-12">{{ __('Ведите email') }}</label>

                            <div class="col-12">
                                <input
                                    id="email"
                                    type="email"
                                    style="width: 100%; margin-top: 0;"
                                    class="messageToTCLvovo__block
                                            @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 d-flex justify-content-between">
                                <label for="password">{{ __('Пароль') }}</label>
                                @if (Route::has('password.request'))
                                    <a class="oneBrand__link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="col-12">
                                <input
                                    id="password"
                                    style="width: 100%; margin-top: 0;"
                                    type="password"
                                    class="messageToTCLvovo__block
                                            @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-start">
                            <div class="form-group mb-0 mr-4">
                                <div class="">
                                    <button type="submit" class="btn btn-warning">
                                        {{ __('Войти') }}
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
        </div>
        <div class="col-md-6">
            <div style="margin-bottom: 30px;" class="brands__header">Создать новый аккаунт</div>

            <div style="margin-bottom: 30px;" class="d-flex justify-content-center">
                <a href="/register" class="btn btn-success">Зарегестрироваться</a>
            </div>
            <div>
                <div class="missionBlock__header">Зарегестрируйся и ты сможешь:</div>
                <div class="missionBlock__list row">
                    <div class="offset-1 col-md-6">
                        <div class="d-flex justify-content-between">
                            <i class="missionBlock__icon fas fa-check"></i>
                            <div>Быстро делать заказ;</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <i class="missionBlock__icon fas fa-check"></i>
                            <div>Следить за статусом заказа;</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <i class="missionBlock__icon fas fa-check"></i>
                            <div>Видеть историю покупок;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

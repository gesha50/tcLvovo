@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin-bottom: 50px;" class="d-flex justify-content-center px-3">
        <div class="col-md-10">
            <div style="margin-bottom: 30px;" class="brands__header">{{ __('Регистрация') }}</div>
            <div style="margin-bottom: 30px;" class="d-flex justify-content-start">
                <button disabled class="btn btn-info mr-2">Зарегестрироваться через Facebook</button>
                <button disabled class="btn btn-danger">Зарегестрироваться через Google</button>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="name" class="col-12">{{ __('Имя') }}</label>

                            <div class="col-12">
                                <input
                                    id="name"
                                    type="text"
                                    style="width: 100%; margin-top: 0;"
                                    class="messageToTCLvovo__block @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-12">{{ __('E-Mail') }}</label>

                            <div class="col-12">
                                <input
                                    id="email"
                                    type="email"
                                    style="width: 100%; margin-top: 0;"
                                    class="messageToTCLvovo__block @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                >

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="form-group row">
                            <label for="password" class="col-12">{{ __('Пароль') }}</label>

                            <div class="col-12">
                                <input
                                    id="password"
                                    type="password"
                                    style="width: 100%; margin-top: 0;"
                                    class="messageToTCLvovo__block @error('password') is-invalid @enderror"                                    name="password"
                                    required
                                    autocomplete="new-password"
                                >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12">{{ __('Повторите пароль') }}</label>

                            <div class="col-12">
                                <input
                                    id="password-confirm"
                                    type="password"
                                    style="width: 100%; margin-top: 0;"
                                    class="messageToTCLvovo__block"
                                    name="password_confirmation"
                                    required
                                    autocomplete="new-password"
                                >
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <div class="">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Зарегестрироваться') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

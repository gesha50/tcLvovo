
@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection
@section('description')Мета описание для СЕО@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Редактировать Контакты</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
        <div class="card p-2">
            <form action="{{ route('admin.contact.update', $contact) }}" class="row" method="POST">
                @csrf
                @method('put')
                <div class="form-group col-md-6">
                    <label for="phone">Номер телефона</label>
                    <input type="text" class="form-control"
                           id="phone" value="{{ $contact->phone }}"
                           name="phone">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Электронная почта</label>
                    <input type="text" class="form-control"
                           id="email" value="{{ $contact->email }}"
                           name="email">
                </div>
                <div class="form-group col-md-12">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control"
                           id="address" value="{{ $contact->address }}"
                           name="address">
                </div>
                <input type="submit" class="btn btn-danger edit__btn" value="Внести изменения">
            </form>
        </div>
@endsection

@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection
@section('description')Мета описание для СЕО@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Контакты</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
        <div class="card">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Телефон</th>
                    <th>Почта</th>
                    <th>Адрес</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->address }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    <a href="{{ route('admin.contact.edit') }}" class="btn btn-success contact__btn">Изменить</a>
@endsection

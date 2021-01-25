@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Контакты</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
            <div class="card cardTable">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>Название компании</th>
                        <th>Территориальное название</th>
                        <th>Описание</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->address }}</td>
                        <td><a href="{{ route('admin.contact.edit') }}" class="btn btn-success">Изменить</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>Телефон</th>
                        <th>Почта</th>
                        <th>Адрес</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->address }}</td>
                        <td><a href="{{ route('admin.contact.edit') }}" class="btn btn-success">Изменить</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
@endsection

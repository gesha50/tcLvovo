@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Редактировать Информацию о компании</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
        <div class="card p-2">
            <form action="{{ route('admin.information.update', $information) }}" class="row" method="POST">
                @csrf
                @method('put')
                <div class="form-group col-md-5">
                    <label for="company_name">Имя компании</label>
                    <input type="text" class="form-control"
                           id="company_name" value="{{ $information->company_name }}"
                           name="company_name">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">Название</label>
                    <input type="text" class="form-control"
                           id="name" value="{{ $information->name }}"
                           name="name">
                </div>
                <div class="form-group col-md-2">
                    <label for="works_room">Помещений в работе</label>
                    <input type="text" class="form-control"
                           id="works_room" value="{{ $information->works_room }}"
                           name="works_room">
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Описание</label>
                    <input type="text" class="form-control"
                           id="description" value="{{ $information->description }}"
                           name="description">
                </div>
                <input type="submit" class="btn btn-danger edit__btn" value="Внести изменения">
            </form>
        </div>
@endsection

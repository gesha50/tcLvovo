@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Достоинство №{{$tenants->id}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.tenants.index') }}">Dignities</a></li>
            <li class="breadcrumb-item active">Услуга №{{$tenants->id}}</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-success m-2 text-white" href="{{route('admin.tenants.create')}}">
                    Добавить новую услугу
                </a>
                <a class="btn btn-warning m-2" href="{{route('admin.tenants.edit', $tenants->id)}}">
                    Редактировать эту услугу
                </a>
            </div>
            <div class="card">
                <i class="fa {{$tenants->icon_class}}"></i>
                <h3>{{$tenants->title}}</h3>
                <div class="card-body">
                    <p class="card-text">{{$tenants->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

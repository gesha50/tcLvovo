@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Услуги</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Service</li>
        </ol>
        <div class="addNews">
            <a class="btn btn-success m-2 text-white" href="{{route('admin.services.create')}}">
                Добавить новую услугу
            </a>
        </div>
        <div class="row justify-content-around">
        @foreach ($services as $obj)
            <div class="col-md-3 card p-1 m-2">
                    <div>
                        <i class="fas {{$obj->icon_class}}"></i>
                        <h3>{{$obj->service_name}}</h3>
                        <h6>{{$obj->companies->name}}</h6>
                        <p>{{$obj->preview}}</p>
                    </div>
                <div class="text-center">
                    <a class="btn btn-dark text-white d-block m-1" href="{{route('admin.services.show', $obj->id)}}">Подробнее</a>
                    <a class="btn btn-warning d-block m-1" href="{{route('admin.services.edit', $obj->id)}}">Редактировать</a>
                    <form
                        class="d-block"
                        action="{{route('admin.services.destroy', $obj->id)}}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger w-100" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

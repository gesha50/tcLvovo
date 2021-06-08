@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Бренды</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">brands</li>
        </ol>
        <div class="addNews">
            <a class="btn btn-success m-2 text-white" href="{{route('admin.brands.create')}}">
                Добавить новый бренд
            </a>
        </div>
        <div class="row justify-content-around">
            @foreach ($brands as $obj)
                <div class="col-md-3 card p-1 m-2">
                    <div>
                        <img width="90%" src="{{$obj->image}}" alt="">
                        <h3>{{$obj->title}}</h3>
                        <h6>{{$obj->link}}</h6>
                        <p>{{$obj->description}}</p>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-dark text-white d-block m-1" href="{{route('admin.brands.show', $obj->id)}}">Подробнее</a>
                        <a class="btn btn-warning d-block m-1" href="{{route('admin.brands.edit', $obj->id)}}">Редактировать</a>
                        <form
                            class="d-block"
                            action="{{route('admin.brands.destroy', $obj->id)}}"
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

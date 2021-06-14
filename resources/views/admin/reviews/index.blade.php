@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Отзывы</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
        <div class="addNews">
            <a class="btn btn-success m-2 text-white" href="{{route('admin.reviews.create')}}">
                Добавить новый отзыв
            </a>
        </div>
        <div class="row justify-content-around">
        @foreach ($reviews as $obj)
            <div class="col-md-3 card p-1 m-2">
                    <div>
                        <h3>{{$obj->name}}</h3>
                        <h6>{{$obj->worker}}</h6>
                        <p>{{$obj->review}}</p>
                    </div>
                <div class="text-center">
                    <a class="btn btn-dark text-white d-block m-1" href="{{route('admin.reviews.show', $obj->id)}}">Подробнее</a>
                    <a class="btn btn-warning d-block m-1" href="{{route('admin.reviews.edit', $obj->id)}}">Редактировать</a>
                    <form
                        class="d-block"
                        action="{{route('admin.reviews.destroy', $obj->id)}}"
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

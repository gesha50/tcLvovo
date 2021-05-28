@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Контакты</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Gallery</li>
        </ol>
        <span>Выберите категроию фотографий: </span>
        <form action="{{route('admin.gallery.filter')}}">
            <select name="categoryName">
                <option value="all">Все</option>
                @foreach ($uniqueName as $obj)
                    <option
                        {{ $obj->nameForId == $name ? "selected":"" }}
                        value="{{$obj->nameForId}}">
                        {{$obj->nameForId}}
                    </option>
                @endforeach
            </select>
            <button class="btn btn-success">Применить</button>
        </form>
    <div class="galleryCards">
        @foreach ($gallery as $obj)
            <div class="card p-1 galleryCard">
                <img src="{{$obj->img}}" alt="">
            </div>
        @endforeach
    </div>
@endsection

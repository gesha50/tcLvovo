@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Галерея</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Gallery</li>
        </ol>
        <div class="row">
            <div class="col-md-6">
                <span>Выберите категроию фотографий: </span>
                <form action="{{route('admin.gallery.filter')}}">
                    <select name="categoryName">
                        <option value="all">Все</option>
                        @foreach ($uniqueName as $obj)
                            <option
                                {{ $obj->name == $name ? "selected":"" }}
                                value="{{$obj->name}}">
                                {{$obj->name}}
                            </option>
                        @endforeach
                    </select>
                    <button class="btn btn-success">Применить</button>
                </form>
            </div>
            <div class="col-md-6">
                <a href="{{route('admin.gallery.create')}}" class="btn btn-success float-end">
                    Добавить изображения
                </a>
            </div>
        </div>
    <div class="galleryCards">
        @forelse($gallery as $obj)
            <div class="card p-1 galleryCard">
                <div class="galleryCard__companyName">
                    Компания: {{ $obj->brand_name }}{{$name}}
                </div>
                <div class="galleryCard__delete">
                    <form action="{{route('admin.gallery.destroy', $obj->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </div>
                <img src="{{$obj->img}}" alt="">
            </div>
        @empty
            <div class="card col-md-4 p-3 mt-3">
                <p class="fs-6 text-center">У этой компании нету изображений :( </p>
            </div>
        @endforelse
    </div>
@endsection

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
                                {{ $obj->nameForId == $name ? "selected":"" }}
                                value="{{$obj->nameForId}}">
                                {{$obj->nameForId}}
                            </option>
                        @endforeach
                    </select>
                    <button class="btn btn-success">Применить</button>
                </form>
            </div>
            <div class="col-md-6">
                <form action="{{route('admin.gallery.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
{{--                    <label for="" class="galleryImgDownload">Загрузить изображения</label>--}}
                    <input
                        multiple
                        id="galleryImgDownload"
                        type="file"
                        name="galleryImgDownload[]"
                        accept="image/*"
                    >
                    <input type="submit" value="Загрузить">
                </form>
            </div>
        </div>
    <div class="galleryCards">
        @foreach ($gallery as $obj)
            <div class="card p-1 galleryCard">
                <div class="galleryCard__delete">
                    <form action="{{route('admin.gallery.destroy', $obj->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </div>
                <img src="{{$obj->img}}" alt="">
            </div>
        @endforeach
    </div>
@endsection

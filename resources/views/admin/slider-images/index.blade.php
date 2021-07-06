@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Слайдер на Главной странице</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Slider Image</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <form action="{{route('admin.slider-images.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file">
                        <input
                            type="file"
                            class="custom-file-input"
                            id="sliderImgDownload"
                            name="sliderImgDownload"
                            accept="image/*"
                        >
                        <label class="custom-file-label" for="sliderImgDownload">Загрузить изображение</label>
                    </div>
                    <button class="btn btn-success mt-3" type="submit">Загрузить</button>
                </form>
            </div>
            @foreach ($sliderImages as $obj)
                <div class="card p-1 newsCard">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/storage/{{$obj->pathToImage}}" alt="">
                        </div>
                        <div class="col-md-2 text-center">
                            <form action="{{route('admin.slider-images.destroy', $obj->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-2" type="submit">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

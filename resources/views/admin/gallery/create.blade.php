@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Добавить изображения</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.gallery.index') }}">Gallery</a></li>
            <li class="breadcrumb-item active">Добавить изображения</li>
        </ol>
        <div class="newsContainer col-md-6">
            <form action="{{route('admin.gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="company_id">Выберите компанию</label>
                    <select class="custom-select" name="name">
                        @if(is_array($uniqueName) || is_object($uniqueName))
                            <option value="all">Все</option>
                            @foreach ($uniqueName as $obj)
                                <option
                                    {{ $obj->name == $name ? "selected":"" }}
                                    value="{{$obj->name}}">
                                    {{$obj->name}}
                                </option>
                            @endforeach
                        @else
                            <option
                                value="{{$uniqueName}}">
                                {{$uniqueName}}
                            </option>
                        @endif
                    </select>
                </div>
                <span>Если нету категории сначало
                    <a href="{{ route('admin.companies.create') }}">создайте компанию</a>
                </span>
                <div class="custom-file">
                    <input
                        multiple
                        type="file"
                        class="custom-file-input"
                        id="galleryImgDownload"
                        name="galleryImgDownload[]"
                        accept="image/*"
                    >
                    <label class="custom-file-label" for="galleryImgDownload">Загрузить изображения</label>
                </div>

                <button class="btn btn-success mt-3" type="submit">Загрузить</button>
            </form>
        </div>
    </div>
@endsection

@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">{{$companies->brand_name}}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.companies.index') }}">Companies</a></li>
            <li class="breadcrumb-item active">Услуга №{{$companies->id}}</li>
        </ol>
        <div class="newsContainer">
            <div class="addNews">
                <a class="btn btn-warning m-2" href="{{route('admin.companies.edit', $companies->id)}}">
                    Редактировать эту компанию
                </a>
            </div>
            <div class="card p-3">
                <h3>Компания - {{$companies->name}}</h3>
                <h5>Название на сайте: {{$companies->brand_name}}</h5>
                <div class="card-body">
                    <p class="card-text">Основной вид деятельности: {{$companies->type_of_activity}}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                @if($countServices)
                    <div class="card col-md-4 mt-3 p-3">
                        кол-во подключенных услуг: {{$countServices}}
                    </div>
                @else
                    <div class="card col-md-4 mt-3 p-3">
                        Нету подключенных услуг!
                    </div>
                @endif
                <div class="col-md-4">
                    <a
                        class="btn btn-success m-2 text-white"
                        href="{{route('admin.services.create', ['companyCurrentName' => $companies->brand_name])}}"
                    >
                        Добавить новую услугу для этой компании
                    </a>
                </div>
            </div>
            <div class="row">
                @forelse($currentServices as $service)
                <div class="card col-md-3 m-2 p-3 bg-light text-center">
                    <i class="fas {{$service->icon_class}} fs-5 m-auto"></i>
                    <p class="m-2">{{$service->name}}</p>
                    <p>{{$service->preview}}</p>
                    <a
                        class="btn btn-dark text-white d-block m-1"
                        href="{{route('admin.services.show', $service->id)}}"
                    >Подробнее...</a>
                </div>
                @empty
                    у вас нету подключенных услуг
                @endforelse
            </div>
            <hr>
            <div class="row">
                @if($countImage)
                    <div class="card col-md-4 mt-3 p-3">
                        кол-во изображений: {{ $countImage }}
                    </div>
                @else
                    <div class="card col-md-4 mt-3 p-3">
                        У компании нету изображений :(
                    </div>
                @endif
                    <div class="col-md-4">
                        <a
                            class="btn btn-success m-2 text-white"
                            href="{{route('admin.gallery.create', ['companyCurrentName' => $companies->name])}}"
                        >
                            Добавить изображение для этой компании
                        </a>
                    </div>
            </div>
            <div class="row">
                @foreach($currentImages as $image)
                    <div class="card col-md-3 m-2 p-3 bg-light text-center">
                        <img src="{{$image->img}}" alt="">
                    </div>
                @endforeach
            </div>
            <hr>
        </div>
    </div>
@endsection

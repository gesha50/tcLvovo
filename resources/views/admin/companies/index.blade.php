@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Компании</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Company</li>
        </ol>
        <div class="addNews">
            <a class="btn btn-success m-2 text-white" href="{{route('admin.companies.create')}}">
                Добавить новую компанию
            </a>
        </div>
        <div class="row justify-content-around">
            @for ($i = 0; $i < count($companies); $i++)
                <div class="col-md-3 card p-1 m-2 text-center">
                    <div>
                        <h3>{{$companies[$i]->name}}</h3>
                        <h6>{{$companies[$i]->brand_name}}</h6>
                        <p>{{$companies[$i]->type_of_activity}}</p>
                        <p>Кол-во услуг:
                            <strong class="fs-5">
                                @if($companies[$i]->number_of_services)
                                    {{$companies[$i]->number_of_services}}
                                @else
                                    0
                                @endif
                            </strong>
                        </p>
                        <p>Кол-во изображений:
                            <strong class="fs-5">
                                @if($countGalleries[$i]->number_of_galleries)
                                    {{$countGalleries[$i]->number_of_galleries}}
                                @else
                                    0
                                @endif
                            </strong>
                        </p>
                    </div>
                <div class="text-center">
                    <a class="btn btn-dark text-white d-block m-1" href="{{route('admin.companies.show', $companies[$i]->id)}}">Подробнее</a>
                    <a class="btn btn-warning d-block m-1" href="{{route('admin.companies.edit', $companies[$i]->id)}}">Редактировать</a>
                    <form
                        class="d-block"
                        action="{{route('admin.companies.destroy', $companies[$i]->id)}}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger w-100" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
            @endfor
        </div>
@endsection

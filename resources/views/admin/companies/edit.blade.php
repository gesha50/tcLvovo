@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Редактировать компанию</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.services.index') }}">Companies</a></li>
            <li class="breadcrumb-item active">Редактировать компанию №{{$companies->brand_name}}</li>
        </ol>
        <div class="newsContainer">
            <form method="POST" action="{{ route('admin.companies.update', $companies) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Название компании</label>
                    <input
                        name="name"
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        placeholder="TireFast"
                        value="{{ old('name', $companies->name) }}"
                    >
                </div>
                @foreach($errors->get('name') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="brand_name">Название фирмы (то как будет отображаться на сайте)</label>
                    <input
                        name="brand_name"
                        type="text"
                        class="form-control @error('brand_name') is-invalid @enderror"
                        id="brand_name"
                        placeholder="TireFast"
                        value="{{ old('brand_name', $companies->brand_name ) }}"
                    >
                </div>
                @foreach($errors->get('brand_name') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="type_of_activity">Вид деятельности</label>
                    <input
                        name="type_of_activity"
                        type="text"
                        class="form-control @error('type_of_activity') is-invalid @enderror"
                        id="type_of_activity"
                        placeholder="Шиномонтаж"
                        value="{{ old('type_of_activity', $companies->type_of_activity) }}"
                    >
                </div>
                @foreach($errors->get('type_of_activity') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <button type="submit" class="btn btn-success">Редактировать компанию</button>
            </form>
        </div>
    </div>
@endsection

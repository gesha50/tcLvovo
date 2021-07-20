@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Новая услуга</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.services.index') }}">Service</a></li>
            <li class="breadcrumb-item active">Добавить новую услугу</li>
        </ol>
        <div class="newsContainer">
            <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="company_id">Выберите компанию</label>
                    <select class="custom-select" name="company_id" id="company_id">
                        @foreach($companyName as $name)
                            <option
                                @if($name->brand_name == $companyCurrentName) selected @endif
                                value="{{$name->id}}"
                            >{{$name->brand_name}}</option>
                        @endforeach
                    </select>
                    <p>
                        если нужной компании нет в списке нужно сначало
                        <a href="{{ route('admin.companies.create') }}">создать компанию</a>
                    </p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="name">Название услуги</label>
                    <input
                        name="name"
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        placeholder="Шиномонтаж"
                        value="{{ old('name') }}"
                    >
                </div>
                @foreach($errors->get('name') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="preview">Короткое описание</label>
                    <input
                        name="preview"
                        type="text"
                        class="form-control @error('preview') is-invalid @enderror"
                        id="preview"
                        placeholder="Быстрая замена шин, ремонт покрышек и т.д."
                        value="{{ old('preview') }}"
                    >
                </div>
                @foreach($errors->get('preview') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="description">Полное описание</label>
                    <input
                        name="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        id="description"
                        placeholder="Мы предоставляем качественные услуги..."
                        value="{{ old('description') }}"
                    >
                </div>
                @foreach($errors->get('description') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="why_choose_us">Почему выбирает именно нас?</label>
                    <input
                        name="why_choose_us"
                        type="text"
                        class="form-control @error('why_choose_us') is-invalid @enderror"
                        id="why_choose_us"
                        placeholder="Мы предоставляем качественные услуги..."
                        value="{{ old('why_choose_us') }}"
                    >
                </div>
                @foreach($errors->get('why_choose_us') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="pluses">Достоинства (ВАЖНО!! перечислять достоинства по пунктам, через запятую ",")</label>
                    <input
                        name="pluses"
                        type="text"
                        class="form-control @error('pluses') is-invalid @enderror"
                        id="pluses"
                        placeholder="качественный подход, быстрая работа, современное оборудование, ..."
                        value="{{ old('pluses') }}"
                    >
                </div>
                @foreach($errors->get('pluses') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <div class="form-group">
                    <label for="icon_class">CSS-класс иконки можно взять
                        <a
                            target="_blank"
                            href="https://fontawesome.com/v5.15/icons?d=gallery&p=2"
                        >здесь</a>
                    </label>
                    <input
                        name="icon_class"
                        type="text"
                        class="form-control @error('icon_class') is-invalid @enderror"
                        id="icon_class"
                        placeholder="fa-car"
                        value="{{ old('icon_class') }}"
                    >
                </div>
                @foreach($errors->get('icon_class') as $error)
                    <div class="text-danger">{{ $error }}</div>
                @endforeach

                <button type="submit" class="btn btn-success">Добавить услугу</button>
            </form>
        </div>
    </div>
@endsection

@extends('admin.layouts.app')
@section('title')Админка | ТК Львово@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Обратная связь</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Feedback</li>
        </ol>
        <div class="newsContainer">
            @foreach ($feedbacks as $obj)
                <div class="card p-1 newsCard">
                    <div class="row text-center">
                        <div class="col-md-1">{{$obj->id}}</div>
                        <div class="col-md-3">
                            <h3>{{$obj->name}}</h3>
                            <h4>{{$obj->email}}</h4>
                            <p>{{$obj->phone}}</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{$obj->theme}}</p>
                            <p>{{$obj->message}}</p>
                        </div>
                        <div class="col-md-2 text-center">
                            <form action="{{route('admin.feedbacks.destroy', $obj->id)}}" method="POST">
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

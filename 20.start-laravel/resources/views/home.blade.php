@extends('layouts.main')

@section('title', 'Alcan Events')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Buscar um evento</h1>
        <form action="">
            <input type="text" name="name" id="name" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPiD4aRKhLI0D66W5QwZ9iqfZov_Bhn08-Nw&usqp=CAU"
                        alt="Banner do evento {{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">12/12/2012</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">
                            X participantes
                        </p>
                        <a href="/event/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

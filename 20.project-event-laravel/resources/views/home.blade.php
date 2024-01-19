@extends('layouts.main')

@section('title', 'Alcan Events')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Buscar um evento</h1>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar"
                value="{{ $search }}">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Resultado da busca: {{ $search }}
                <a href="/"><ion-icon name="close-outline"></ion-icon></a>
            </h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @else
            <h2>Próximos eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">
            @if (count($events) != 0)
                @foreach ($events as $event)
                    <div class="card col-md-3">
                        <img src="images/events/{{ $event->image }}" alt="Banner do evento {{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/y - H:i', strtotime($event->date)) }}</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">
                                {{ count($event->users) }} participantes
                            </p>
                            <a href="/event/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                    </div>
                @endforeach
            @else
                @if ($search)
                    <p>Nenhum evento encontrado. <a href="/">Voltar</a></p>
                @else
                    <p>Nenhum evento disponível</p>
                @endif
            @endif
        </div>
    </div>
@endsection

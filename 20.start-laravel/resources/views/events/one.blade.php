@extends('layouts.main')

@section('title', 'Alcan Events')

@section('content')
    <main class="d-flex justify-content-center">
        <div class="col-md-10 offset-md-1 py-4">
            <div class="row">
                <div id="image-container" class="col-md-6">
                    <img class="image-fluid" src="/images/events/{{ $event->image }}"
                        alt="Imagem do evento {{ $event->title }}">
                </div>
                <div id="info-container" class="col-md-6">
                    <h1>{{ $event->title }}</h1>
                    <p class="event-city">
                        <ion-icon name="location-outline"></ion-icon>
                        {{ $event->city }}
                    </p>
                    <p class="event-participants">
                        <ion-icon name="people-outline"></ion-icon>
                        X participantes
                    </p>
                    <p class="event-owner">
                        <ion-icon name="star-outline"></ion-icon>
                        Dono do evento
                    </p>
                    <p class="event-owner">
                        <ion-icon name="calendar-outline"></ion-icon>
                        {{ date('d/m/y - H:i', strtotime($event->date)) }}
                    </p>
                    @if (isset($event->itens))
                        <h3 class="pt-4">Evento conta com:</h3>
                        <ul id="itens-list">
                            @foreach ($event->itens as $item)
                                <li>
                                    <ion-icon name="play-outline"></ion-icon>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <a href="/" class="btn btn-primary" id="event-submit">
                        Confirmar presença
                    </a>
                </div>
                <div class="col-md-12" id="description-container">
                    <h3>Sobre o evento</h3>
                    <p class="event-description">
                        {{ $event->description }}
                    </p>
                </div>
            </div>
        </div>
    </main>

@endsection

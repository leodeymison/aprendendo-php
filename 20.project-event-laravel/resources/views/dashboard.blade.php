@extends('layouts.main')

@section('title', 'Alcan Events')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container mt-4 mb-4">
        <h1>Meus eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container mb-4">
        @if (count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $index => $event)
                        <tr>
                            <td scope="row">{{ 1 + $index }}</td>
                            <td scope="row">
                                <a href="/event/{{ $event->id }}">{{ $event->title }}</a>
                            </td>
                            <td scope="row">{{ count($event->users) }} Participantes</td>
                            <td scope="row">
                                <div class="d-flex">
                                    <a href="/event-edit/{{ $event->id }}" class="btn btn-success">
                                        <ion-icon name="create-outline"></ion-icon>
                                        Editar
                                    </a>
                                    <form action="/event/{{ $event->id }}" class="mx-1" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn">
                                            <ion-icon name="trash-outline"></ion-icon>
                                            Deletar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não tem eventos <a href="/event-create">Criar evento</a></p>
        @endif
    </div>
    <div class="col-md-10 offset-md-1 dashboard-title-container mt-4 mb-4">
        <h1>Eventos que estou participando</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container mb-4">
        @if (count($eventsAsParticipants) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventsAsParticipants as $index => $event)
                        <tr>
                            <td scope="row">{{ 1 + $index }}</td>
                            <td scope="row">
                                <a href="/event/{{ $event->id }}">{{ $event->title }}</a>
                            </td>
                            <td scope="row">{{ count($event->users) }} Participantes</td>
                            <td scope="row">
                                <div class="d-flex">
                                    <form action="/event-leave/{{ $event->id }}" class="mx-1" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn">
                                            <ion-icon name="close-outline"></ion-icon>
                                            Sair do evento
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não tem eventos <a href="/event-create">Criar evento</a></p>
        @endif
    </div>
@endsection

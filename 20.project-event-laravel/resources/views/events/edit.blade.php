@extends('layouts.main')

@section('title', 'Alcan Events')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3 py-4">
        <h1 class="text-center">Editando evento</h1>
        <form action="/event/update/{{ $event->id }}" method="POST" class="pt-4" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group pb-4">
                <label for="image">Imagem:</label>
                <input type="file" class="form-control-file" id="image" name="image" />
                <img src="/images/events/{{ $event->image }}" alt="" class="img-preview">
            </div>
            <div class="form-group pb-4">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do eventos"
                    value="{{ $event->title }}" />
            </div>
            <div class="form-group pb-4">
                <label for="description">Descrição:</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    placeholder="Descrição do evento aqui">
                    {{ $event->description }}</textarea>
            </div>
            <div class="form-group pb-4">
                <label for="date">Data do evento:</label>
                <input type="datetime-local" class="form-control" id="date" name="date"
                    placeholder="Dia e hora do evento" value="{{ $event->date }}" />
            </div>
            <div class="form-group pb-4">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade"
                    value="{{ $event->city }}" />
            </div>
            <div class="form-group pb-4">
                <label for="tile">Privado?</label>
                <div>
                    <button type="button" class="btn">
                        <label for="private">
                            <input type="radio" name="private" id="private" value="1" checked={{{ $event->private }}}>
                            SIM
                        </label>
                    </button>
                    <button type="button" class="btn">
                        <label for="public">
                            <input type="radio" name="private" id="public" value="0" checked={{{ $event->private }}}>
                            NÃO
                        </label>
                    </button>

                </div>
            </div>
            <div class="form-group">
                <label for="itens">Adicione itens de infraestrutura:</label>
                @foreach($infra as $item)
                    <div class="form-group">
                        <input type="checkbox" name="itens[]" value="{{ $item }}"> {{ $item }}
                    </div>
                @endforeach
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Editar evento</button>
            </div>
        </form>
    </div>
@endsection

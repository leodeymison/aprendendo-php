@extends('layouts.main')

@section('title', 'Alcan Events')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3 py-4">
        <h1 class="text-center">Crie o seu evento</h1>
        <form action="/event" method="POST" class="pt-4">
            @csrf
            <div class="form-group pb-4">
                <label for="tile">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do eventos" />
            </div>
            <div class="form-group pb-4">
                <label for="tile">Descrição:</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    placeholder="Descrição do evento aqui"></textarea>
            </div>
            <div class="form-group pb-4">
                <label for="tile">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade" />
            </div>
            <div class="form-group pb-4">
                <label for="tile">Privado?</label>
                <div>
                    <button type="button" class="btn">
                        <label for="private">
                            <input type="radio" name="private" id="private" value="1">
                            SIM
                        </label>
                    </button>
                    <button type="button" class="btn">
                        <label for="public">
                            <input type="radio" name="private" id="public" value="0">
                            NÃO
                        </label>
                    </button>

                </div>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Salvar evento</button>
            </div>
        </form>
    </div>
@endsection

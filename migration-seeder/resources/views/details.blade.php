@extends('layout.main')
@section('content')
    <div class="container my-5">
        <h1>Dettagli Treno</h1>

        <ul class="list-group">
            <li class="list-group-item"><strong>Azienda:</strong> {{ $train->company }}</li>
            <li class="list-group-item"><strong>Stazione di partenza:</strong> {{ $train->departure_station }}</li>
            <li class="list-group-item"><strong>Stazione di arrivo:</strong> {{ $train->arrival_station }}</li>
            <li class="list-group-item"><strong>Ora di partenza:</strong> {{ $train->departure_time }}</li>
            <li class="list-group-item"><strong>Ora di arrivo:</strong> {{ $train->arrival_time }}</li>
            <li class="list-group-item"><strong>Codice del treno:</strong> {{ $train->train_code }}</li>
            <li class="list-group-item"><strong>Numero di carrozze:</strong> {{ $train->number_of_carriages }}</li>
            <li class="list-group-item"><strong>È in orario:</strong> {{ $train->is_on_time ? 'Si' : 'No' }}</li>
            <li class="list-group-item"><strong>È cancellato:</strong> {{ $train->is_cancelled ? 'Si' : 'No' }}</li>

        </ul>


    </div>
@endsection

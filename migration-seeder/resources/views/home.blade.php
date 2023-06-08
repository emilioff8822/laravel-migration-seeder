@extends('layout.main')

@section('content')
    <main class="bg-light">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">company</th>
                        <th scope="col">departure_station</th>
                        <th scope="col">arrival_station</th>
                        <th scope="col">departure_time</th>
                        <th scope="col">arrival_time</th>
                        <th scope="col">train_code</th>
                        <th scope="col">number_of_carriages</th>
                        <th scope="col">is_on_time</th>
                        <th scope="col">is_cancelled</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->number_of_carriages }}</td>
                            <td>{{ $train->is_on_time ? 'Si' : 'No' }}</td>
                            <td>{{ $train->is_cancelled ? 'Si' : 'No' }}</td>
                            <td><a href="/trains/{{ $train->train_code }}" class="btn btn-primary">DETTAGLI</a></td>


                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </main>
@endsection

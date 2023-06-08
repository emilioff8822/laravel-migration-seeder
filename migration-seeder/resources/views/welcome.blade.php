<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DB_TRAINS</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <h1>TRENI</h1>
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

                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </main>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <h1>Trains</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Codice treno</th>
                        <th scope="col">Numero carrozze</th>
                        <th scope="col">In orario</th>
                        <th scope="col">Cancellato</th>
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
                            <td>{{ $train->carriages_number }}</td>
                            <td>{{ $train->is_on_time == 1 ? 'Si' : 'No' }}</td>
                            <td>{{ $train->is_cancelled == 1 ? 'Si' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>

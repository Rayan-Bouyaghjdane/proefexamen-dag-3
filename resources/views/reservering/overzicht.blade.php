<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
    @endif

    <h1>Overzicht Reserveringen</h1>

    <form action="" method="POST">
        @csrf
        @method('POST')
        <label for="datum">Datum:</label>
        <input type="date" name="datum">
        <input type="submit" value="Tonen">
    </form>

    <table>
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Reserveringsdatum</th>
                <th>Uren</th>
                <th>Volwassenen</th>
                <th>Kinderen</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reserveringen as $reservering)
                <tr>
                    <td>{{ $reservering->Persoon->Voornaam }}</td>
                    <td>{{ $reservering->Persoon->Tussenvoegsel }}</td>
                    <td>{{ $reservering->Persoon->Achternaam }}</td>
                    <td>{{ $reservering->Datum }}</td>
                    <td>{{ $reservering->AantalUren }}</td>
                    <td>{{ $reservering->AantalVolwassenen }}</td>
                    <td>{{ $reservering->AantalKinderen }}</td>
                    <td>{{ $reservering->ReserveringStatus->Status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

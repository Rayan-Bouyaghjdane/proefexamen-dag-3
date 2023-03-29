<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Datum</th>
                <th>Volwassenen</th>
                <th>Kinderen</th>
                <th>Optiepakket</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservering as $reservering)
                <tr>
                    <td>{{ $reservering->persoons->Voornaam }}</td>
                    <td>{{ $reservering->persoons->Tussenvoegsel }}</td>
                    <td>{{ $reservering->persoons->Achternaam }}</td>
                    <td>{{ $reservering->Datum }}</td>
                    <td>{{ $reservering->AantalVolwassenen }}</td>
                    <td>{{ $reservering->AantalKinderen }}</td>
                    <td>{{ $reservering->Optiepakket }}</td>
                    <td>
                        <a href="{{ route('reservering.update', $reservering->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

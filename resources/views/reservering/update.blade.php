<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('reservering.update', ['reservering' => $reservering->id]) }}" method="post">
        @method('PUT')
        @csrf
        <select name="Optiepakket" id="">
            <option value="">Selecteer een Optiepakket</option>
            @foreach ($reservering as $reservering)
                <option @if (old('instructeur', $rijschool->instructeur_id) == $instructeur->id) selected @endif value="{{ $instructeur->id }}">
                    {{ $instructeur->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

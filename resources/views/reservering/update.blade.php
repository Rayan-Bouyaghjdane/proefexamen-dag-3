<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>

<body>
    {{-- @dd($PakketOpties) --}}
    <h1>Details optiepakket</h1>

    @if (\Session::has('error'))
        <div class="alert alert-error">
            <p>{{ \Session::get('error') }}</p>
        </div>
    @endif

    <form action="{{ route('reservering.update', ['reservering' => $reservering->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <select name="PakketOptieId" id="">
            <option value="">Selecteer een Optiepakket</option>
            @foreach ($PakketOpties as $PakketOptie)
                <option value="{{ $PakketOptie->id }}" @if ($PakketOptie->id == $reservering->PakketOptieId) selected @endif>
                    {{ $PakketOptie->Naam }}
                </option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

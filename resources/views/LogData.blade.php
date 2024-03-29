<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Logdata

    <form action="{{ route('createLogData') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input list="diagnosis" name="diagnosis">

        <datalist id="diagnosis">
            @foreach ($diagnoses as $key => $diagnosis)
                <option value="{{ $diagnosis->id }}">{{ $diagnosis->title }}</option>
            @endforeach
        </datalist>
        <input list="jig" name="jig">

        <datalist id="jig">
            @foreach ($jigs as $key => $jig)
                <option value="{{ $jig->id }}">{{ $jig->title }}</option>
            @endforeach
        </datalist>
        <input type="submit" value="submit">
    </form>
</body>

</html>

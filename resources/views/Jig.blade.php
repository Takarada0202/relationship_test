<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Jig

    <form action="{{ route('createJig') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input list="logData" name="logData">

        <datalist id="logData">
            @foreach ($logDatas as $key => $logData)
                <option value="{{ $logData->id }}">{{ $logData->title }}</option>
            @endforeach
        </datalist>
        <input type="submit" value="submit">
    </form>
</body>

</html>

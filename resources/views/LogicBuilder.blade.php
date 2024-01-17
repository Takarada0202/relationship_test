<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    LogicBuilder

    <form action="{{ route('createLogicBuilder') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input list="parsingBuilder" name="parsingBuilder">

        <datalist id="parsingBuilder">
            @foreach ($parsingBuilders as $key => $parsingBuilder)
                <option value="{{ $parsingBuilder->id }}">{{ $parsingBuilder->title }}</option>
            @endforeach
        </datalist>
        <input type="submit" value="submit">
    </form>
</body>

</html>

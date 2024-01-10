<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Divison
    @foreach ($divisions as $key => $division )
        {{ $division }}
    @endforeach

    <form action="{{ route('createDivision') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input list="company" name="company">

        <datalist id="company">
            @foreach ($companies as $key => $company)
                <option value="{{ $company->id }}">{{ $company->title }}</option>
            @endforeach
        </datalist>
        <input type="submit" value="submit">
    </form>
</body>
</html>

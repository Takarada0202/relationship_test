<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    AccountingUnit
    {{-- @foreach ($divisions as $key => $division )
        {{ $division }}
    @endforeach --}}
    <form action="{{ route('createAccountingUnit') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input list="divisions" name="division">

        <datalist id="divisions">
            @foreach ($divisions as $key => $division)
                <option value="{{ $division->id }}">{{ $division->title }}</option>
            @endforeach
        </datalist>
        <input type="submit" value="submit">
    </form>
</body>
</html>

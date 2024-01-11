<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Product
    
    <form action="{{ route('createProduct') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input list="accountingUnits" name="accountingUnit">

        <datalist id="accountingUnits">
            @foreach ($accountingUnits as $key => $accountingUnit)
            <option value="{{ $accountingUnit->id }}">{{ $accountingUnit->title }}</option>
            @endforeach
        </datalist>
        <input type="submit" value="submit">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Company
    @foreach ($companies as $key => $company)
    {{ $company }}
    @endforeach
    <form action="{{ route('createCompany') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input type="submit" value="submit">
    </form>
</body>
</html>

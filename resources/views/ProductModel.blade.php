<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    ProductModel

    <form action="{{ route('createProductModel') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <input list="product" name="product">

        <datalist id="product">
            @foreach ($products as $key => $product)
                <option value="{{ $product->id }}">{{ $product->title }}</option>
            @endforeach
        </datalist>

        <input list="logicBuilder" name="logicBuilder">

        <datalist id="logicBuilder">
            @foreach ($logicBuilders as $key => $logicBuilder)
                <option value="{{ $logicBuilder->id }}">{{ $logicBuilder->title }}</option>
            @endforeach
        </datalist>


        <input type="submit" value="submit">
    </form>
</body>

</html>

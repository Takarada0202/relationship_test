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

        <input list="jig" name="jig">

        <datalist id="jig">
            @foreach ($jigs as $key => $jig)
                <option value="{{ $jig->id }}">{{ $jig->title }}</option>
            @endforeach
        </datalist>

        <input list="diagnosis" name="diagnosis">

        <datalist id="diagnosis">
            @foreach ($diagnoses as $key => $diagnosis)
                <option value="{{ $diagnosis->id }}">{{ $diagnosis->title }}</option>
            @endforeach
        </datalist>

        <input list="productModelSuffix" name="productModelSuffix">

        <datalist id="productModelSuffix">
            @foreach ($productModelSuffixes as $key => $productModelSuffix)
                <option value="{{ $productModelSuffix->id }}">{{ $productModelSuffix->title }}</option>
            @endforeach
        </datalist>

        <input list="logicBuilder" name="logicBuilder">

        <datalist id="logicBuilder">
            @foreach ($logicBuilders as $key => $logicBuilder)
                <option value="{{ $logicBuilder->id }}">{{ $logicBuilder->title }}</option>
            @endforeach
        </datalist>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($price as $position_price)
                        <h4>
                            {{ $position_price->name_product}}
                            {{ $position_price->price}}
                            {{ $position_price->production_time}} Дня

                        </h4>

                        @endforeach
</body>
</html>
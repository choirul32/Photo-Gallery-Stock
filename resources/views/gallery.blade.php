<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Photo Gallery</h1>
        </div>
        <div class="gallery">
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->rsc) }}" alt="">
                @endforeach
            </div>
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->rsc) }}" alt="">
                @endforeach
            </div>
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->rsc) }}" alt="">
                @endforeach
            </div>
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->rsc) }}" alt="">
                @endforeach
            </div>
        </div>
    </div>
    
</body>
</html>
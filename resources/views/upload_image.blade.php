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
            <h1>Upload Photo</h1>
        </div>
        <div class="form-card">
            <form method="post" action="{{ route('gallery.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="file-upload">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    
</body>
</html>
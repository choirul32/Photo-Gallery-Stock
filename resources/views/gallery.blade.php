@extends('layouts.app')

@section('content')
    <div class="container-2">
        <div class="header">
            <h1>Photo Gallery</h1>
        </div>
        <div class="gallery">
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->src) }}" alt="">
                @endforeach
            </div>
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->src) }}" alt="">
                @endforeach
            </div>
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->src) }}" alt="">
                @endforeach
            </div>
            <div class="grid_item">
                @foreach ($model->shuffle() as $item)
                    <img src="{{ url('storage/images/' . $item->src) }}" alt="">
                @endforeach
            </div>
        </div>
    </div>
@endsection
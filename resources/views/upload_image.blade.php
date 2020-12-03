@extends('layouts.app')

@section('content')
<div class="container-2">
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
@endsection

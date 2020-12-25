@extends('layouts.app')

@section('content')
    <div class="container-2">
        <div class="header text-center">
            <h1>Photo Gallery</h1>
        </div>
        <div class="gallery">
            @foreach ($model->shuffle() as $item)           
            <div class="grid_item">
                <a class="btn-show" href="{{ route('gallery.show', $item->id) }}" title="show">
                    <img src="{{ url('storage/images/' . $item->src) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

<script>
    $('body').on('click', '.btn-show', function (event) {
    event.preventDefault();
    
    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');  
    
    $.ajax({
        url: url,
        dataType: 'html',
        success: function (response) {
            $('#modal-body').html(response);
        }
    });

    $('#modal').modal('show');
});
</script>
@endpush




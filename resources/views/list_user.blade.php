@extends('layouts.app')

@section('content')
    <div class="container-2">
        <div class="header text-center">
            <h1>Any User</h1>
        </div>
        <div class="gallery">
            @foreach ($model->shuffle() as $item)           
            <div class="grid_item">
                <div class="card text-center">
                    <img src="https://lh3.googleusercontent.com/ytP9VP86DItizVX2YNA-xTYzV09IS7rh4WexVp7eilIcfHmm74B7odbcwD5DTXmL0PF42i2wnRKSFPBHlmSjCblWHDCD2oD1oaM1CGFcSd48VBKJfsCi4bS170PKxGwji8CPmehwPw=w200-h247-no" alt="Person" class="card__image">
                    <p class="card__name">{{ $item->name }}</p>
                    <div class="grid-container">
                
                      <div class="grid-child-posts">
                        {{ $item->photoCount() }} Post
                      </div>
                
                      <div class="grid-child-followers">
                    
                        {{ $item->allCountLikes() }} Likes    
                      </div>
                
                    </div>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-codepen"></i></a></li>
                    </ul>
                    <button class="btn btn-primary mb-1">Follow</button>
                    <button class="btn btn-success mb-1">Message</button>
                
                  </div>
                  
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




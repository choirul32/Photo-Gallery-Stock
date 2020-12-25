@extends('layouts.app')

@section('content')
<div class="container-2">
    <div class="header text-center">
        <h1>Upload Photo</h1>
    </div>
    <form method="post" action="{{ route('gallery.store')}}" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col">
                <div class="form-image-upload">
                    <div class="image-preview">
                        <div id="imagePreview" style="background-image: url();">
                        </div>
                    </div>
                    <div class="image-edit">
                        <div class="button-wrap">
                            
                            <input id="file-upload" type="file" name="image" accept=".png, .jpg, .jpeg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="name-image">Name</label>
                    <input name="name_photo" type="text" class="form-control" id="name-image" aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">Masukan nama untuk photo.</small>
                </div>
                <label for="tag-image">Tag</label>
                <div class="form-group">
                    <input name="tag_photo" type="text" class="form-control" data-role="tagsinput" id="tag-image" aria-describedby="tagHelp">
                    <small id="tagHelp" class="form-text text-muted">Masukan tag photo yang berhubungan.</small>
                </div>
            </div>
        </div>
        
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
    
</div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#file-upload").change(function() {
            readURL(this);
        });
    </script>
@endpush

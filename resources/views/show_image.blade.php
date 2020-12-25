<div class="row">
    <div class="col">
        <img src="{{ url('storage/images/' . $model->src) }}" alt="">
    </div>
    <div class="col">
    Name : <span>{{ $model->name }}</span><br>
    Created At : <span>{{ $model->created_at }}</span><br>
    Tag : @foreach ($model->tag as $item)
            <span>{{ $item->name }}</span>
        @endforeach
    </div>
</div>

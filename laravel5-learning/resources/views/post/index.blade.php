@extends ('welcome')

@section('content')

@foreach($posts as $post)
    
    <h2>{{$post->title}}</h2>
    <p>
        {!! $post->excert !!}
    </p>
    <p>
        {!!$post->content!!}
    </p>        
<p>
    published: {{ $post->published_at}}
</p>

@endforeach

@stop

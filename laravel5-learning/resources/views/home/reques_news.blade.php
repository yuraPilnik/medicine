@extends ('index')

@section('news')
    @foreach($newsHome as $new)
            <h2 id = "headtextNews">
                {{$new->title}}
            </h2>
            <p id = "publicTextNews">
                Опубликовано: {{ $new->created_at}}
            </p>
            <p id = "contentTextNews">
                {!!$new->content!!}
            </p>        

@endforeach
@stop

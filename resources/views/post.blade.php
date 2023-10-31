@extends ('layouts.main') 

@section ('container')
    <article>
    <h2>{{ $title  }}</h2>
    <h5>{{ $author  }}</h5>
    <p>{{ $body  }}</p>
    </article>

    <a href="/blog">Back to Posts</a>

@endsection
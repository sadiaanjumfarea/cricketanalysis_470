@foreach($articles as $article)
    <a href="{{ route('articles.show', $article->id) }}">
        <h2>{{ $article->title }}</h2>
    </a>
    <p>{{ $article->content }}</p>
    <p>Total Views: {{ $article->views()->count() }}</p>
@endforeach

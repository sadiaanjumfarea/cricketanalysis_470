<h1>{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<p>Total Views: {{ $article->views()->count() }}</p>

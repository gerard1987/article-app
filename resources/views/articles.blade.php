<div>
<h1>Articles List</h1>

@if($articles->isEmpty())
    <p>No articles found.</p>
@else
    <ul>
        @foreach($articles as $article)
            <li>{{ $article->name }} - ${{ number_format($article->price, 2) }}</li>
        @endforeach
    </ul>
@endif
</div>
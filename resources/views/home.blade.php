<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <h1>Articles List</h1>
    
    @if($articles->isEmpty())
        <p>No articles found.</p>
    @else
        <ul>
            @foreach($articles as $article)
                <li>{{ $article->name }} - ${{ $article->price }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>

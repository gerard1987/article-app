<header>
    @include('layouts.header')
</header>

<div>
<h1>Articles List</h1>

@if($articles->isEmpty())
    <p>No articles found.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Article Name</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->name }}</td>
                    <td>${{ number_format($article->price, 2) }}</td>
                    <td><a href="<?= url("/articles/edit/"); ?>">Edit</td>
                    <td><a href="<?= url("/articles/edit"); ?>">Edit</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
</div>
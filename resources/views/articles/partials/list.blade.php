<div>
    <h4>{{ $article['title']}}</h4>
    <p>{{ $article['content']}}</p>
    <a href="{{ route('articles.edit', ['article' => $article['id']]) }}"><button type="button">Edit</button></a>
    <br>
</div>
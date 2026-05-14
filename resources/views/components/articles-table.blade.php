<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->user->name }}</td>
                <td>
                    @if(is_null($article->is_accepted))
                    <a href="{{route('article.show', compact('article'))}}" class="btn btn-success" >leggi l'articolo</a>
                    @else
                    <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn btn-success" >Riporta in revisione</a>
                    @endif
                </td>
            </tr>

        @endforeach
    </tbody>
</table>